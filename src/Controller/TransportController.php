<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransportController extends AbstractController
{
    /**
     * @Route("/transport", name="transport")
     */
    public function browse(): Response
    {
        return $this->render('transport/browse.html.twig', [
            'controller_name' => 'TransportController',
        ]);
    }
}
