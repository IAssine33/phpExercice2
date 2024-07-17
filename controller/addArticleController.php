
<?php

require_once('../config/config.php');
require_once("../model/articleRepository.php");



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
        
        $requestIsOk = $articleRepository->insert($title, $content, $date);

        require_once('../template/page/addArticleView.php');



    }
}

$addArticleController = new addArticleController();
$addArticleController->addArticle();