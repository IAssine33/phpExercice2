
<?php 

require_once('../config/config.php');

class articleRepository{

    // methode de récupération des données
    public function findArticles(){

        // se connecter a la base se donner
        $dbConnection = new dbConnection();
        $pdo = $dbConnection->connect();

        // recuperation de données (artile) de la base de donner
        $stmt = $pdo->query("SELECT * FROM article");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $articles;

    }
        // la méthode insert permet de sauver des données dans la table article
        // elle insère le titre, le contenu et la date qu'on lui envoie en parametre
    public function insert($title, $content, $date){

        // Se connecter a la base se donner
        $dbConnection = new dbConnection();
        $pdo = $dbConnection->connect();

        // Préparer la requête SQL
        $sql = "INSERT INTO article (titre, content, created_at) VALUES (:titre, :content, :date)";
        $stmt = $pdo->prepare($sql);

        // Définir les paramètres à remplacer avec leurs valeurs
        $titre = "Exemple de titre";
        $content = "Exemple de CONTENU";
        $created_at = "24-04-17";

        //  le bindParam verifie si 
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':date', $created_at);

        // recuperer la methode exécution de la requête dans une variable et la retourner.
        $requestIsOk = $stmt->execute();
        return $requestIsOk;
        
    }

    public function findOneById($id){

        // se connecter a la base se donner
        $dbConnection = new dbConnection();
        $pdo = $dbConnection->connect();

        // recuperation de données (artiles) de la base de donner.
        $stmt = $pdo->prepare("SELECT * FROM article WHERE id = :id");

        // Vérifictaion et nettoyage pour eviter les ecritures du langages SQL.
        $stmt->bindParam(':id', $id);

        // execution de la requéte
        $stmt->execute();

        $article = $stmt->fetch(PDO::FETCH_ASSOC);

        return $article;

    }

    public function deleteById($id){

        $dbConnection = new dbConnection();
        $pdo = $dbConnection->connect();

        $stmt = $pdo->prepare("DELETE FROM article WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $requestIsOk = $stmt->execute();
        return $requestIsOk;

    }

}

