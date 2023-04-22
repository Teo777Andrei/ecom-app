<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Traits\AuthTrait;
use Exception;

class HomeController extends AbstractController
{
    use AuthTrait;

    #[Route(path: '/', name: 'user.home')]
    public function home(): Response
    {
        try {
            return $this->render(
                'home/index.html.twig',
                [
                    'user' => $this->getAuth()
                ]
            );
        } catch (Exception $t) {
            return new Response($t->getMessage());
        }
    }
}