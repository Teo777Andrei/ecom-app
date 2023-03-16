<?php

namespace App\Controller;

use App\Service\ProductsService;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    public function __construct(private ProductsService $productsService)
    {}

    /**
     * @param Request $request
     * @return Response
     */
    #[Route(path: '/products-categories', name: 'products.categories')]
    public function listProducts(Request $request): Response
    {
        $currentCategory = $this->productsService->getCurrentCategory($request);
        $products = $this->productsService->getProductsFromCategory($currentCategory);
         
        return $this->render(
            'products\index.html.twig',
            [
                'categories' => $this->productsService->listCategories($request),
                'current' => $currentCategory,
                'products' => $products,
            ]
        );
    }
   
    #[Route(path: '/products/{id}', name: 'products.data')]
    public function listProduct(int $id, Request $request): Response
    {
        try {
            $cartAddError = $request->getSession()->get('cart.add.error');
            $request->getSession()->remove('cart.add.error');
            return $this->render(
                'products\product.html.twig',
                [
                    'product' => $this->productsService->getProduct($id),
                    'cartError' => $cartAddError
                ]
            );

        } catch (Exception $e) { 
            return new Response($e->getMessage());
        }
    }
}