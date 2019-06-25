<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class BlogController extends AbstractController
{

    // affichage de tous les articles
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticleRepository $repo )
    {
        $articles =$repo ->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
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
     * @Route("blog/{id}", name="blog_show")
     */
    public function show(ArticleRepository $repo,$id){

        $article = $repo -> find($id);
        
        return $this -> render ('blog/show.html.twig',[
            'article'=> $article
        ]);
    }

}

