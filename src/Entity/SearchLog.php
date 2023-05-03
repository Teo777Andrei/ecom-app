<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

#[ORM\Entity(repositoryClass: EntityRepository::class)]
#[ORM\Table(name:"search_log")]
class SearchLog
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;
    
    #[ORM\Column(length: 50)]
    private string $type;

    #[ORM\Column(length: 65520)]
    private string $request;

    
    #[ORM\Column(length: 65520)]
    private string $response;

    #[ORM\Column(type: 'datetime')]
    private DateTime $date;

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
     * Get the value of type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of request
     *
     * @return string
     */
    public function getRequest(): string
    {
        return $this->request;
    }

    /**
     * Set the value of request
     *
     * @param string $request
     *
     * @return self
     */
    public function setRequest(string $request): self
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get the value of response
     *
     * @return string
     */
    public function getResponse(): string
    {
        return $this->response;
    }

    /**
     * Set the value of response
     *
     * @param string $response
     *
     * @return self
     */
    public function setResponse(string $response): self
    {
        $this->response = $response;

        return $this;
    }

  

    /**
     * Get the value of date
     *
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param DateTime $date
     *
     * @return self
     */
    public function setDate(DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }
}