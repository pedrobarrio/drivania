<?php
declare (strict_types=1);

namespace App\Entrypoint\Controller;


use App\Application\Command\UpdateRideServiceCommand;
use Assert\InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class PutRideServiceController extends AbstractController
{

    public function __invoke(Request $request)
    {
        $body = $this->getRequestBody($request);
        $command = UpdateRideServiceCommand::fromPayload(
        );

        return new JsonResponse([], JsonResponse::HTTP_CREATED);
    }


    public function getRequestBody(Request $request): ParameterBag
    {
        /** @var string $content */
        $content = $request->getContent();
        $body = json_decode($content, true);

        if (json_last_error()) {
            throw new InvalidArgumentException('Json body malformed.', json_last_error(), 'body', json_last_error_msg());
        }

        return \is_array($body) ? new ParameterBag($body) : new ParameterBag([]);
    }


}