<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExitController extends AbstractController
{
    /**
     * @Route("/exit", name="exit")
     */
    public function index()
    {
        return $this->render('exit/index.html.twig', [
            'controller_name' => 'ExitController',
        ]);
    }
}
