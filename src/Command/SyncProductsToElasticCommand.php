<?php 
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Product;
use App\Service\ElasticService;
use Throwable;

class SyncProductsToElasticCommand extends Command
{
    private const NAME = 'app:sync-elastic';

    public function __construct(private EntityManagerInterface $entityManager, private ElasticService $elasticService)
    {
        parent::__construct(self::NAME);
    }

    protected function configure()
    {
        $this
            ->setDescription('sync all products from database with Elasticsearch');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $client = $this->elasticService->getClient();
        
            $products = $this->entityManager->getRepository(Product::class)->findAll();

            $params = [
                'index' => 'products',
                'body'  => [],
            ];
            
            foreach ($products as $product) {
                $params['body'][] = [
                    'index' => ['_id' => $product->getId()],
                ];
                $params['body'][] = [
                    'id' => $product->getId(),
                    'name' => $product->getName(),
                    'specs' => $product->getSpecs()
                ];
            }

            $client->bulk($params);
            $output->writeln('Products inserted into Elasticsearch.');
            return Command::SUCCESS;
        } catch (Throwable $e) {
            $output->writeln($e->getMessage());
            return Command::FAILURE;
        }
    }
}