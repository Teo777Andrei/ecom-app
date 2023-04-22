<?php 

namespace App\Repository;

use Elastic\Elasticsearch\Client as ElasticClient;
use Symfony\Contracts\Service\Attribute\Required;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductRepository extends ServiceEntityRepository
{
    private ElasticClient $elasticClient;

    public function __construct(ManagerRegistry $managerRefistry)
    {
        parent::__construct($managerRefistry, Product::class);
    }

    /* public function getProductsByName(string $searchTerm): array
    {
        $qb = $this->createQueryBuilder('p')
            ->where('p.name = :search')
            ->setParameter('search', $searchTerm);

        return $qb->getQuery()->getResult();
    }
 */
 
    public function getProductsByName(string $searchTerm): array
    {
        $query = [
            'match' => [
                'name' => $searchTerm
            ]
        ];

        $searchParams = [
            'index' => 'products',
            'body' => [
                'query' => $query
            ]
        ];

        $response = $this->elasticClient->search($searchParams);

        return $response['hits']['hits'];
    }

    #[Required]
    public function setElasticClient(ElasticClient $elasticClient)
    {
        $this->elasticClient = $elasticClient;
        $this->elasticClient->getTransport()->getNodePool()->setHosts(['http://127.0.0.1:9200']);
    }
}