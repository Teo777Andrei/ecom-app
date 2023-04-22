<?php

namespace App\Controller;

use App\Service\CartsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class CartsController extends AbstractController
{
    public function __construct(private CartsService $cartsService)
    {
    }

    #[Route(path: '/add-product-cart', name: 'cart.add', methods:['POST'])]
    public function addProduct(Request $request): JsonResponse
    {
        try {
            $this->cartsService->addProduct($request);

            $request->getSession()->set('cart.add.error', 'OK-ADD-CART');
            return new JsonResponse(['data' => ""]);
        } catch (Throwable $t) {
            $request->getSession()->set('cart.add.error', $t->getMessage());
            return new JsonResponse(
                ['data' => $t->getMessage(),
                 JsonResponse::HTTP_INTERNAL_SERVER_ERROR]
            );
        }
    }

    #[Route(path: '/products-cart', name: 'cart.view')]
    public function listCartItems(Request $request): Response
    {
        try {
            $cart = $this->cartsService->getAuthCart();

            $message = 0;
            if ($request->getSession()->get('cart.clear')) {
                $message = $request->getSession()->get('cart.clear');
            }

            if ($request->getSession()->get('cart.checkout')) {
                $message = $request->getSession()->get('cart.checkout');
            }

            $request->getSession()->remove('cart.checkout');
            $request->getSession()->remove('cart.clear');

            return $this->render(
                'products/cart.html.twig',
                [
                    'cart' => $cart,
                    'total' => $this->cartsService->calculateTotalForCheckout(),
                    'message' => $message
                ]
            );
        } catch (Throwable $t) {
            return new Response($t->getMessage());
        } 
    }

    #[Route(path: '/cart-clear', name: 'cart.clear', methods: ['PATCH'])]
    public function clearCart(Request $request): Response
    {
        try {
            $this->cartsService->clearCart();
            $request->getSession()->set('cart.clear', 'OK-CHECKOUT');
            return new Response('OK');
        } catch (Throwable $t) {
            $request->getSession()->set('cart.clear', $t->getMessage());
            return new Response($t->getMessage());
        }
    }

    #[Route(path: '/checkout', name: 'cart.checkout', methods: ['POST'])]
    public function checkout(Request $request): Response
    {
        try {
            $this->cartsService->checkout($request);
            $request->getSession()->set('cart.checkout', 'OK-CHECKOUT');
            return new Response("OK");
        } catch (Throwable $t) {
            $request->getSession()->set('cart.checkout', $t->getMessage());
            return new Response($t->getMessage());

        }
    }
}