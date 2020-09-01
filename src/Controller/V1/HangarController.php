<?php

namespace App\Controller\V1;

use App\Domain\Exception\ModelNotFoundException;
use App\Domain\Repository\HangarRepositoryInterface;
use App\DTO\Factory\HangarDTOFactory;
use Symfony\Component\HttpFoundation\Response;

class HangarController
{
    private $repository;
    private $responseFactory;

    public function __construct(HangarRepositoryInterface $repository, HangarDTOFactory $hangarDTOFactory)
    {
        $this->repository = $repository;
        $this->responseFactory = $hangarDTOFactory;
    }

    public function airplanes(string $name): Response
    {
        try {
            $hangar = $this->repository->getByName($name);
            $response = new Response(\json_encode($this->responseFactory->build($hangar)));
        } catch (ModelNotFoundException $e) {
            $response = new Response($e->getMessage(), Response::HTTP_NOT_FOUND);
        }

        return $response;
    }
}