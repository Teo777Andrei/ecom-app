<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;
    
    #[ORM\Column(length: 30, unique: true)]
    private string $phone; 

    #[ORM\Column(length: 50)]
    private string $firstName;

    #[ORM\Column(length: 50)]
    private string $lastName;

    #[ORM\Column]
    private array $roles = [];
    
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToOne(targetEntity: Cart::class, mappedBy: 'user')]
    private ?Cart $cart;
    


    /**
     * @return integer|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     *
     * @param string $email
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     *
     * @return string
     */
    public  function getPhone(): string
    {
        return $this->phone;
    }
    
    /**
     * @param string $phone
     * @return self
     */
    public function setPhone(string $phone): self 
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return self
     */
    public function setLastName(string $lastName): self 
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }


    /**
     * @return array
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param array $roles
     * @return self
     */
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

  
    /**
     * Undocumented function
     *
     * @return void
     */
    public function eraseCredentials(): void
    {
    }

    /**
     * Get the value of cart
     *
     * @return ?Cart
     */
    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    /**
     * Set the value of cart
     *
     * @param Cart|null $cart
     *
     * @return self
     */
    public function setCart(?Cart $cart): self
    {
        $this->cart = $cart;

        return $this;
    }
}
