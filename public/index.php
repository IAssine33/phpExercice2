<?php


require_once('../controller/articleController.php');
require_once('../controller/indexController.php');


// Récupérer l'URL demandée
$requestUri = $_SERVER['REQUEST_URI'];

// Nettoyer l'URL (enlever les paramètres GET)
$uri = parse_url($requestUri, PHP_URL_PATH);

// Enlever le préfixe /piscine_blog_php/public/
$endUri = str_replace('/piscine_blog_php/public/', '', $uri);
$endUri = trim($endUri, '/');


if($endUri === "") {

    $indexController = new indexController();
    $indexController->index();

} else if ($endUri === "add-article") {

    $addArticleController = new articleController();
    $addArticleController->addArticle();

} else if ($endUri === "show-article") {

    $addArticleController = new articleController();
    $addArticleController->showArticle();

} else if ($endUri === "delete-article") {

    $addArticleController = new articleController();
    $addArticleController->deleteArticle();

}else {
    echo '<p>Dégage</p>';


}






