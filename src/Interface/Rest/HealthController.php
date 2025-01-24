<?php

declare(strict_types=1);

namespace App\Interface\Rest;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
#[Route(
    path: '/health',
    name: 'health_',
    methods: ['GET'])]
class HealthController
{
    #[Route(path: '/', name: 'basic', methods: ['GET'])]
    public function basic(): Response
    {
        return new Response('OK', Response::HTTP_OK);
    }

    #[Route(path: '/full', name: 'advanced', methods: ['GET'])]
    public function advanced(): Response
    {
        $status = [
            'System' => 'OK',
            'DB' => 'OK',
            'Cache' => 'OK',
        ];

        return new JsonResponse($status, Response::HTTP_OK);
    }
}