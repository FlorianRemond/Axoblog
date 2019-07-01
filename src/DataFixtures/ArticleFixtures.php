<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //utlisation de faker pour compléter la BDD, ici on précise le lieu "fr"
        $faker = \Faker\Factory::create ('fr_FR');

        //Création de 3 catégories fakées
      for ($i=1;$i<=3; $i++){
          $category = New Category();
          $category ->setTitle($faker -> sentence())
                    ->setDescription($faker -> paragraph());
          $manager ->persist($category);

          //Creer entre 4 et 6 articles

          for ($j=0; $j<=mt_rand(4,6); $j++){
              $article = new Article();

              //on place les paragraphs de faker qui sont des tableaux
              //dans une variable
              $content = '<p>';
              //on ajout a content avec le "."
              $content.=join($faker->paragraphs(5),'</p><p>');
              $content.='</p>';

              $article ->setTitle($faker -> sentence())
                  -> setContent($content)
                  -> setImage($faker ->imageUrl())
                  -> setCreatedAt($faker->dateTimeBetween('-6 mounths'))
                  // on ajout la catégorie à l'article
                  -> setCategory($category);

              $manager->persist($article);

                //on donne des commentaires à l'article
              for ($k=1; $k <= mt_rand(4,10);$k++){


                  $content = '<p>';
                  //on ajout a content avec le "."
                  $content.=join($faker->paragraphs(2),'</p><p>');
                  $content.='</p>';

                  $now = new \DateTime();
                  $interval =$now -> diff($article-> getCreatedAt());
                  $days = $interval ->days;
                  $minimum ='-'.$days.'days'; // -100 days


                    $comment =new Comment();
                    $comment->setAuthor ($faker ->name)
                            ->setContent($content)
                            ->setCreatedAt($faker ->dateTimeBetween($minimum))
                            ->setArticle ($article);
                    $manager->persist($comment);

                  }
              }

         }
        $manager->flush();
    }
}
