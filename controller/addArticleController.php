
<?php

require_once('../config/config.php');
require_once("../model/articleRepository.php");



class addArticleController {

    public function addArticle(){




        // verifier si la REQUETE est de type POST 
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $titre= $_POST['titre'];
            $content = $_POST['content'];
            $dateNow = new DateTime("NOW");
            $date = $dateNow->format('Y-m-d');

                    // j'instancie l'ArticleRepository
            // et j'appelle la méthode insert
            // on lui donnant les valeurs pour le titre, le contenu et la date
            // que je veux insérer
            $articleRepository = new ArticleRepository();
            
            // appeler la methode insert, recuperation de la valeur retourner par la methode executer
            $requestIsOk = $articleRepository->insert($titre, $content, $date);
        }    else {
            $requestIsOk = false;

        }




        require_once('../template/page/addArticleView.php');



    }
}

$addArticleController = new addArticleController();
$addArticleController->addArticle();