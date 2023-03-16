<?php

namespace App\Entity;

use App\Repository\CartRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Authentication\RememberMe\PersistentToken;

#[ORM\Entity(repositoryClass: CartRepository::class)]
#[ORM\Table(name:"cart")]
class Cart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\OneToOne(targetEntity: User::class, inversedBy: 'cart')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    private User $user;

    #[ORM\OneToMany(targetEntity: CartProduct::class, mappedBy: 'cart', cascade: ['persist'])]
    private $cartProducts = [];

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
     * Get the value of user
     *
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @param User $user
     *
     * @return self
     */
    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of cartProducts
     *
     * @return 
     */
    public function getCartProducts()
    {
        return $this->cartProducts;
    }

    /**
     * Set the value of cartProducts
     *
     * @param  $cartProducts
     *
     * @return self
     */
    public function setCartProducts($cartProducts): self
    {
        $this->cartProducts = $cartProducts;

        return $this;
    }

    /**
     *
     * @param CartProduct $cartProduct
     * @return void
     */
    public function addCartProducts(CartProduct $cartProduct)
    {
        $this->cartProducts[] = $cartProduct;
    }
}