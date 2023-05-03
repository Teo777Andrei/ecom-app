<?php

namespace App\Service;

use App\Entity\SearchLog;
use App\Traits\EntityTrait;
use Elastic\Elasticsearch\Client;

class ElasticService 
{

    use EntityTrait;

    private array $hosts = [];
     
    public function __construct(private Client $client)
    {
        $this->addHost('http://localhost:9200');
    }

    /**
     * @param string $type
     * @return array
     */
    public function getLogs(string $type): array
    {
        $searchLogRepository = $this->getEntityManager()->getRepository(SearchLog::class);
        return $searchLogRepository->findBy([
            'type' => $type
        ]); 
    }
    
    /**
     * @return void
     */
    public function addHost(string $hostName): void
    {
        $this->hosts[] = $hostName;
        $this->client->getTransport()->getNodePool()->setHosts($this->hosts);
    }


    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return self
     */
    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return array
     */
    public function getHosts(): array
    {
        return $this->hosts;
    }

    /**
     * @param array $hosts
     *
     * @return self
     */
    public function setHosts(array $hosts): self
    {
        $this->hosts = $hosts;

        return $this;
    }
} 