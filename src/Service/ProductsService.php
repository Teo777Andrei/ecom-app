<?php

namespace App\Service;

use App\Entity\Category;
use App\Entity\Product;
use App\Traits\EntityTrait;
use Doctrine\Common\Proxy\Proxy;
use Symfony\Component\HttpFoundation\Request;

class ProductsService 
{
    use EntityTrait;
    
    /**
     * @param Request $request
     * @return array
     */
    public function listCategories(Request $request): array 
    {
        return $this->getEntityManager()
        ->getRepository(Category::class)
        ->findBy([
            'parentCategory' => $request->get('id') ?? null
        ]);
    } 

    /**
     * @param Request $request
     * @return Category|null
     */
    public function getCurrentCategory(Request $request): ?Category
    {
        if (!$request->get('id')) {
            return null;
        }

        return $this->getEntityManager()
        ->getRepository(Category::class)
        ->find($request->get('id'));
    }

    /**
     * @param Category|null $category
     * @return array
     */
    public function getProductsFromCategory(?Category $category): array 
    {
        if (!$category instanceof Category) {
            return [];
        }

        if ($category->getChildCategory() instanceof Category) {
            return [];
        }

        return $this
        ->getEntityManager()
        ->getRepository(Product::class)
        ->findBy([
            'category' => $category->getId()
        ]);
    }

    /**
     * @param integer $id
     * @return Product|null
     */
    public function getProduct(int $id): ?Product 
    {
        return $this
        ->getEntityManager()
        ->getRepository(Product::class)
        ->find($id);
    }
}