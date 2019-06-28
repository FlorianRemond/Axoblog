<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


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



    /**
     * @Route("/blog/create",name="blog_create")
     */
    public function creation (Request $request, ObjectManager $manager){
        $article = new Article();

        //formulaire lié à l'article
        $form = $this -> createFormBuilder($article)
                ->add('title')
                ->add('content')
                ->add('image')
                ->getForm();

        //analyse la requete
        $form ->handleRequest($request);
        //dump($article);

        //vérifier si le formulaire a été soumis ET le formulaire est valide
        if ($form -> isSubmitted() && $form->isValid()){
            $article -> setCreatedAt(new \DateTime());

            $manager -> persist($article);
            $manager -> flush();

            //au deuxième passage on analyse le formulaire si ok
            //je retourne sur la page de l'article
            return $this->redirectToRoute('blog_show',[
                'id'=> $article -> getId ()]);

        }
            //on affiche le formulaire au premier passage
        return $this -> render ('blog/create.html.twig',[
            'formArticle'=> $form ->createView()]);
    }



    //affichage d'un seul article
    /**
     * @Route("blog/show/{id}", name="blog_show")
     */
    public function show(Article $article){

        return $this -> render ('blog/show.html.twig',[
            'article'=> $article
        ]);
    }


}

