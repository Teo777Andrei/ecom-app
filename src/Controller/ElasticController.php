<?php

namespace App\Controller;

use App\Service\ElasticService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Throwable;
use App\Entity\SearchLog;

class ElasticController extends AbstractController
{

    private const LOGS_TYPE_FILTERS = 'filter';
    private const LOGS_TYPE_PREDICTIVE = 'predictive';
    private const LOGS_TYPE_SPECS = 'specifications';


    public function __construct(private ElasticService $elasticService)
    {
    }


    #[Route(path: '/elastic-logs/filters', name: 'elastic.logs.filters')]
    public function filters(): Response
    {
        try {
            $logs = $this->elasticService->getLogs(self::LOGS_TYPE_FILTERS);
            return $this->render(
                'logs/filters.html.twig',
                [
                    'logs' => array_map(function (SearchLog $log) {
                        $log->setRequest(json_encode(json_decode($log->getRequest()), JSON_PRETTY_PRINT));
                        return $log;
                    }, $logs)
                ]
            );
        } catch (Throwable $e) {
            return new JsonResponse(
                $e->getMessage() . ' ' . $e->getTraceAsString(),
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    #[Route(path: '/elastic-logs/predictive', name: 'elastic.logs.predictive')]
    public function perdictive(): Response
    {
        try {
            $logs = $this->elasticService->getLogs(self::LOGS_TYPE_PREDICTIVE);
            return $this->render(
                'logs/predictive.html.twig',
                [
                    'logs' => $logs
                ]
            );
        } catch (Throwable $e) {
            return new JsonResponse(
                $e->getMessage() . ' ' . $e->getTraceAsString(),
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    #[Route(path: '/elastic-logs/specifications', name: 'elastic.logs.specs')]
    public function specs(): Response
    {
        try {
            $logs = $this->elasticService->getLogs(self::LOGS_TYPE_SPECS);
            return $this->render(
                'logs/specs.html.twig',
                [
                    'logs' => $logs
                ]
            );
        } catch (Throwable $e) {
            return new JsonResponse(
                $e->getMessage() . ' ' . $e->getTraceAsString(),
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}