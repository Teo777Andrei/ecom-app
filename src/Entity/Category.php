<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Product;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ORM\Table(name:"category")]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 100, unique: true)]
    private string $name;

    #[ORM\Column(length: 100, unique: true)]
    private string $media;

    #[ORM\OneToOne(targetEntity: Category::class, inversedBy: 'childCategory')]
    #[ORM\JoinColumn(name: 'parent_id', referencedColumnName: 'id')]
    private ?Category $parentCategory;

    #[ORM\OneToOne(targetEntity: Category::class, mappedBy: 'parentCategory')]
    private ?Category $childCategory; 

    #[ORM\OneToMany(targetEntity: Product::class, mappedBy: 'category')]
    private $products;


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
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of media
     *
     * @return string
     */
    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * Set the value of media
     *
     * @param string $media
     *
     * @return self
     */
    public function setMedia(string $media): self
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get the value of parentCategory
     *
     * @return ?Category
     */
    public function getParentCategory(): ?Category
    {
        return $this->parentCategory;
    }

    /**
     * Set the value of parentCategory
     *
     * @param ?Category $parentCategory
     *
     * @return self
     */
    public function setParentCategory(?Category $parentCategory): self
    {
        $this->parentCategory = $parentCategory;

        return $this;
    }

    /**
     * Get the value of childCategory
     *
     * @return ?Category
     */
    public function getChildCategory(): ?Category
    {
        return $this->childCategory;
    }

    /**
     * Set the value of childCategory
     *
     * @param ?Category $childCategory
     *
     * @return self
     */
    public function setChildCategory(?Category $childCategory): self
    {
        $this->childCategory = $childCategory;

        return $this;
    }


    

    /**
     * Get the value of products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     */
    public function setProducts($products): self
    {
        $this->products = $products;

        return $this;
    }
}