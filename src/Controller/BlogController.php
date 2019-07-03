<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;



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
     * @Route("/blog/create", name="blog_create")
     * @Route("/blog/{id}/edit", name="blog_edit")
     *
     */
    public function form (Article $article=null,Request $request, ObjectManager $manager){

        if(!$article){
            $article = new Article();
        }
        //grace au formtype par besoin de définir ici le constructeur
        //reprise de la meme fonction pour modifier
       //formulaire lié à l'article
        //$form = $this -> createFormBuilder($article)
        //        ->add('title')
        //        ->add('content')
        //        ->add('image')
        //        ->getForm();

        //utilisation du formType
        $form = $this -> createForm(ArticleType::class, $article);


        //analyse la requete
        $form ->handleRequest($request);
        //dump($article);

        //vérifier si le formulaire a été soumis ET le formulaire est valide
        if ($form -> isSubmitted() && $form->isValid()){
            //ici on précise que si l'article n'a pas d'identifiant
            //alors on lui ajoute une date
            if(!$article ->getId()){
                $article -> setCreatedAt(new \DateTime());
            }
            $manager -> persist($article);
            $manager -> flush();

            //au deuxième passage on analyse le formulaire si ok
            //je retourne sur la page de l'article
            return $this->redirectToRoute('blog_show',[
                'id'=> $article -> getId ()]);

        }
            //on affiche le formulaire au premier passage
        return $this -> render ('blog/create.html.twig',[
            'formArticle'=> $form ->createView(),
            //ici on modifie le bouton en fonction de l'edit ou l'ajout
            // editt mode ; boolean
            'editMode' => $article -> getId()!==null
        ]);

    }


    //affichage d'un seul article
    /**
     * @Route("blog/show/{id}", name="blog_show")
     */
    public function show(Article $article, Request $request, ObjectManager $manager){
        $comment =new Comment();
        $form = $this -> createForm(CommentType::class, $comment);

        $form ->handleRequest($request);
        if ($form -> isSubmitted() && $form->isValid()){
            $comment -> setCreatedAt((new \DateTime))
                     -> setArticle($article);
            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('blog_show',['id'=>$article->getId()]);
        }

        return $this -> render ('blog/show.html.twig',[
            'article'=> $article,
            'commentForm' =>$form -> createView()
        ]);
    }


}

