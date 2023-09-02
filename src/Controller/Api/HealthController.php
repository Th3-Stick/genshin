<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthController
{
    #[Route('/api/health-check', name: 'api_healthcheck')]
    public function check(): Response
    {
        error_log("Salut");
        return new Response(
            'OK'
        );
    }
}
