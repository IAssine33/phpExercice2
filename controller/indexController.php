<?php

require_once('../model/articleRepository.php');

class indexController{


    public function index(){
        $articleRepository = new ArticleRepository();
        $articles = $articleRepository->findArticles();
        
        require_once('../template/page/indexView.php');
    }
}

    //instance de la class
//$indexController = new IndexController();
//$indexController->index();