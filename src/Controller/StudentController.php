<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function browse(): Response
    {
        return $this->render('student/browse.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }
}
