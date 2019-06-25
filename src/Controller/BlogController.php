<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    // affichage de tous les articles 
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }


    //affichage de la homepage
    /**
     * 
     * @Route("/",name="home") 
     */
    public function home ()
    {
        return $this -> render('blog/home.html.twig');
    }


    //affichage d'un seul article
    /**
     * @Route("blog/12", name="blog_show")
     */
    public function show(){
        return $this -> render ('blog/show.html.twig');

    }

}

