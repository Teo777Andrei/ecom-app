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
 
    public function getProductsByName(string $searchTerm): array
    {
        $params = [
            'index' => 'products',
            'body' => [
                'query' => [
                    'prefix' => [
                        'name' => $searchTerm
                    ]
                ]
            ]
        ];

        $response = $this->elasticClient->search($params);

        return $response['hits']['hits'];
    }

    /**
     * @param string $searchTerm
     * @return array
     */
    public function searchProductByTokens(string $searchTerm): array 
    {
        $tokens = explode(" ", $searchTerm);

        $wildCards = [];
        foreach($tokens as $token) {
            $wildCards[] = [
                'wildcard' => [
                    'name' => [
                        'value' => strtolower($token)
                    ]
                ]
            ];
        }

        $params = [
            'index' => 'products',
            'body' => [
                'query' => [
                    'bool' => [
                        'must' => $wildCards
                    ]
                ]
            ]
        ];

        $response = $this->elasticClient->search($params);
        return $response['hits']['hits'];
    }

    #[Required]
    public function setElasticClient(ElasticClient $elasticClient)
    {
        $this->elasticClient = $elasticClient;
        $this->elasticClient->getTransport()->getNodePool()->setHosts(['http://127.0.0.1:9200']);
    }
}