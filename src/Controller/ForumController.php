<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class
ForumController extends AbstractController
{
    /**
     * @Route("/forum", name="forum")
     */
    public function index(ArticleRepository $repo)
    {

        $articles = $repo->findAll();

        return $this->render('forum/index.html.twig', [
            'controller_name' => 'ForumController',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('forum/home.html.twig');
    }

    /**
     * @Route("/forum/new", name="forum_create")
     */
    public function create(){
        return $this->render('form/create.html.twig');
    }

    /**
     * @Route("/forum/{id}", name="forum_show")
     */
    public function show(Article $article){

        return $this->render('forum/show.html.twig', [
            'article' => $article
        ]);
    }

}
