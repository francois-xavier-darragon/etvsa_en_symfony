<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LawController extends AbstractController
{
    /**
     * @Route("/law", name="law")
     */
    public function browse(): Response
    {
        return $this->render('law/browse.html.twig', [
            'controller_name' => 'LawController',
        ]);
    }
}
