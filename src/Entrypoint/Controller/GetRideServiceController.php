<?php
declare (strict_types=1);

namespace App\Entrypoint\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GetRideServiceController extends AbstractController
{
    public function __invoke(Request $request)
    {

        return new JsonResponse([], JsonResponse::HTTP_CREATED);
    }
}