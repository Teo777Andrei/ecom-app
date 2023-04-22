<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

#[ORM\Entity(repositoryClass: EntityRepository::class)]
#[ORM\Table(name:"contact")]

class Contact 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;
    
    #[ORM\Column(length: 100, unique: true)]
    private string  $issue;

    #[ORM\Column(length: 650, unique: true)]
    private string $content;

    #[ORM\Column]
    private bool $sent = false;
    
    #[ORM\ManyToOne(targetEntity: User::class,)]
    #[ORM\JoinColumn(name: 'issuer_id', referencedColumnName: 'id')]
    private User $issuer;

    #[ORM\Column(length: 100, unique: true)]
    private DateTime $issuedDate;


    /**
     * Get the value of issue
     *
     * @return string
     */
    public function getIssue(): string
    {
        return $this->issue;
    }

    /**
     * Set the value of issue
     *
     * @param string $issue
     *
     * @return self
     */
    public function setIssue(string $issue): self
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get the value of content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of sent
     *
     * @return bool
     */
    public function getSent(): bool
    {
        return $this->sent;
    }

    /**
     * Set the value of sent
     *
     * @param bool $sent
     *
     * @return self
     */
    public function setSent(bool $sent): self
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of issuedDate
     *
     * @return DateTime
     */
    public function getIssuedDate(): DateTime
    {
        return $this->issuedDate;
    }

    /**
     * Set the value of issuedDate
     *
     * @param DateTime $issuedDate
     *
     * @return self
     */
    public function setIssuedDate(DateTime $issuedDate): self
    {
        $this->issuedDate = $issuedDate;

        return $this;
    }

    /**
     * Get the value of issuer
     */ 
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Set the value of issuer
     *
     * @return  self
     */ 
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;

        return $this;
    }
}