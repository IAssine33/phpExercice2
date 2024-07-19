
<?php

require_once("../config/config.php");
require_once("../model/articleRepository.php");



class articleController {

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


        $loader = new \Twig\Loader\FilesystemLoader('../template');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('page/addArticleView.html.twig', ['requestIsOk' => $requestIsOk]);
        //require_once('../template/page/addArticleView.html.twig'); pour twig
        }


        public function showArticle(){
            $id = $_GET['id'];
            $articleRepository = new articleRepository();
            $article = $articleRepository->findOneById($id);

            $loader = new \Twig\Loader\FilesystemLoader('../template');
            $twig = new \Twig\Environment($loader);

            echo $twig->render('page/showArticleView.html.twig', ['article' => $article]);
           // require_once('../template/page/showArticleView.html.twig');


    }

    public function deleteArticle(){
        $id = $_GET['id'];
        $articleRepository = new articleRepository();
        $articleRepository->deleteById($id);


            header('Location: http://localhost/piscine_blog_php/public/');




    }


}

//$addArticleController = new articleController();
//$addArticleController->showArticle();