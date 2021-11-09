<?php

namespace App\Controller;

use http\Env;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CryptoController extends AbstractController
{

    /**
     * @var HttpClientInterface
     */
    private $client;

    /**
     * @param HttpClientInterface $client
     */
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @Route("/api/price", name="get_price")
     *
     * @throws TransportExceptionInterface
     */
    public function index(): JsonResponse
    {
        $fetchData = $this->client->request(
            'GET',
            'https://api.binance.com/api/v3/ticker/price'
        );

        return JsonResponse::fromJsonString($fetchData->getContent());
    }
}
