<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CryptoController extends AbstractController
{
    /**
     * @Route("/api/price", name="get_price")
     *
     * @return Response
     */
    public function index(): Response
    {
        //TODO Recupérer la route pour afficher les prix
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CryptoController.php',
        ]);
    }
}
