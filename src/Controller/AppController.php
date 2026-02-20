<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppController extends AbstractController
{
    #[Route('api/index', name: 'api_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->json(
            [
                'data' => [
                    'username' => 'Paul',
                    'email' => 'paul@gmail.com',
                    'password' => '123654789',
                    'age' => 32,
                    'isVerified' => true
                ],
                'count' => 400
            ],
            Response::HTTP_OK
        );
    }
}
