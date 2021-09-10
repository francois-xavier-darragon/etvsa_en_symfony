<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ElectricityController extends AbstractController
{
    /**
     * @Route("/electricity", name="electricity")
     */
    public function browse(): Response
    {
        return $this->render('electricity/browse.html.twig', [
            'controller_name' => 'ElectricityController',
        ]);
    }
}
