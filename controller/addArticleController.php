
<?php

require_once('../config/config.php');
require_once("../model/ArticleRepository.php");




class addArticleController {

    public function addArticle(){

        // controller
        $title = "tetree";
        $content = "teretete";
        $date ="2024-10-10";

        // j'instancie l'ArticleRepository
        // et j'appelle la méthode insert
        // on lui donnant les valeurs pour le titre, le contenu et la date
        // que je veux insérer
        $articleRepository = new ArticleRepository();
        $articleRepository->insert($title, $content, $date);


    }
}

$addArticleController = new addArticleController();
$addArticleController->addArticle();