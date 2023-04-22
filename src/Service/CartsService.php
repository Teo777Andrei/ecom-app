<?php

namespace App\Service;

use App\Entity\Cart;
use App\Entity\CartProduct;
use App\Entity\Product;
use App\Entity\User;
use App\Traits\AuthTrait;
use App\Traits\EntityTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Exception;
use Symfony\Component\HttpFoundation\Request;

class CartsService 
{
    use AuthTrait;
    use EntityTrait;

    public function getAuthCart(): Cart
    {
        /** @var User $user */
        $user = $this->getAuth();
        
        $cart = $user->getCart();
        if(!$cart instanceof Cart) {
          $cart = new Cart();
          $cart->setUser($user);
          $this->getEntityManager()->persist($cart);
          $this->getEntityManager()->flush();   
        }

        return $cart;
    }
     
    public function addProduct(Request $request): void
    {
        $requestContent = json_decode($request->getContent(), true);
        $this->checkPayloadAddItem($requestContent);

        /** @var User $user */
        $user = $this->getAuth();
    
        $cart = $user->getCart();
        if (!$cart instanceof Cart) {
            $cart = new Cart();
            $cart->setUser($user);
        }

        /** @var Product $product */
        $product = $this->getEntityManager()
        ->getRepository(Product::class)
        ->find($requestContent['product_id']);

        $cartProduct = $this->getEntityManager()
        ->getRepository(CartProduct::class)
        ->findOneBy([
            'cart' => $cart->getId(),
            'product' => $product->getId()
        ]);

        if (!$cartProduct instanceof CartProduct) {
            $cartProduct = new CartProduct();
            $cartProduct
            ->setQty(0)
            ->setCart($cart)
            ->setProduct($product);
        }

        $cartProduct
        ->setQty($cartProduct->getQty() + $requestContent['qty']);
       
        
        $cart->addCartProducts($cartProduct);
        $this->getEntityManager()->persist($cart);
        $this->getEntityManager()->persist($product);
        $this->getEntityManager()->flush();
    }

    /**
     * @return void
     */
    public function clearCart(): void
    {
        $cart = $this->getAuthCart();
        
        /** @var CartProduct $cartProduct */
        foreach($cart->getCartProducts() as $cartProduct) {
            $this->getEntityManager()->remove($cartProduct);
        }

        $this->getEntityManager()->flush();
    }

    /**
     * @param Request $request
     * @return void
     */
    public function checkout(Request $request): void
    {
        $requestContent = json_decode($request->getContent(), true);
        $this->checkPayloadCheckout($requestContent);
        
        $cart = $this->getAuthCart();
        
        /** @var CartProduct $cartProduct */
        foreach($cart->getCartProducts() as $cartProduct) {
            $product =  $cartProduct->getProduct();
            $product->setQty($product->getQty() - $cartProduct->getQty());
            $this->getEntityManager()->persist($product);
            $this->getEntityManager()->remove($cartProduct);
        }

        $this->getEntityManager()->flush();
    } 

    /**
     * @param array $payload
     * @return void
     * @throws Exception
     */
    private function checkPayloadAddItem(array $payload): void
    {
        if (!is_numeric($payload['qty'])) {
            throw new Exception('quantity should be numeric');
        }

        if ($payload['qty'] <= 0) {
            throw new Exception('quantity should be at least of one unit');
        }

        return;
    }

    private function checkPayloadCheckout(array $payload): void
    {
        if (!$payload['address']) {
            throw new Exception('No checkout adress provided');
        } 
        
        return;
    }

    /**
     * @return float
     */
    public function calculateTotalForCheckout(): float
    {
        $cart = $this->getAuthCart();

        if (!$cart instanceof Cart) {
            return 0;
        }

        return abs(array_sum(
            array_map(
                function(CartProduct $cartProduct) {
                    return $cartProduct->getQty() * $cartProduct->getProduct()->getPrice();
                },
                $cart->getCartProducts()->getValues(),
            )));
    }
}