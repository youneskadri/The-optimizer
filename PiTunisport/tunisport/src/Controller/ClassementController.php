<?php

namespace App\Controller;

use App\Service\TunisianLeagueRankingService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ClassementController
{
    /**
     * @Route("/classement", name="classement")
     */
    public function getClassement(TunisianLeagueRankingService $rankingService): JsonResponse
    {
        $classement = $rankingService->getRanking();

        return new JsonResponse($classement);
    }
}

