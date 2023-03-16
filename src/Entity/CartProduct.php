<?php 

namespace App\Entity;

use App\Repository\CartProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartProductRepository::class)]
#[ORM\Table(name:"cart_product")]
class CartProduct 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;
    
    #[ORM\Column]
    private float $qty;

    #[ORM\ManyToOne(targetEntity: Cart::class, inversedBy: 'products')]
    #[ORM\JoinColumn(name: 'cart_id', referencedColumnName: 'id')]
    private Cart $cart;
    
    #[ORM\ManyToOne(targetEntity: Product::class, inversedBy: 'products')]
    #[ORM\JoinColumn(name: 'product_id', referencedColumnName: 'id')]
    private Product $product;

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of qty
     *
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }

    /**
     * Set the value of qty
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get the value of cart
     *
     * @return Cart
     */
    public function getCart(): Cart
    {
        return $this->cart;
    }

    /**
     * Set the value of cart
     *
     * @param Cart $cart
     *
     * @return self
     */
    public function setCart(Cart $cart): self
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get the value of product
     *
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @param Product $product
     *
     * @return self
     */
    public function setProduct(Product $product): self
    {
        $this->product = $product;

        return $this;
    }
}