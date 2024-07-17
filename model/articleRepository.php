
<?php 

class articleRepository{

    public function findArticles(){

        // se connecter a la base se donner
        $dbConnexion = new dbConnection();
        $pdo = $dbConnexion->connect();

        // recuperation de données (artiles) de la base de donner
        $stmt = $pdo->query("SELECT * FROM article");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $articles;

    }
}