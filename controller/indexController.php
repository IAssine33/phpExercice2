<?php

class indexController{


    public function index(){
        require_once('../config/config.php');

        $dbConnexion = new dbConnection();
        $pdo = $dbConnexion->connect();

        $stmt = $pdo->query("SELECT * FROM article");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    require_once('../template/page/indexView.php');
    }
}
$indexController = new IndexController();
$indexController->index();