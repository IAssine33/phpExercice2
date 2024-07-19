<?php

require_once('../model/articleRepository.php');

class indexController{


    public function index(){
        $articleRepository = new ArticleRepository();
        $articles = $articleRepository->findArticles();

        $loader = new \Twig\Loader\FilesystemLoader('../template');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('page/index.html.twig', ['articles' => $articles]);
        
      //  require_once('../template/page/indexView.html.twig'); pour twig
    }
}

    //instance de la class
//$indexController = new IndexController();
//$indexController->index();