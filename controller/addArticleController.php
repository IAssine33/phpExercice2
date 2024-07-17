
<?php

require_once('../config/config.php');
class addArticleController {

    public function addArticle(){

         // Se connecter a la base se donner
         $dbConnexion = new dbConnection();
         $pdo = $dbConnexion->connect();

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

        // Exécuter la requête, si tout vas bien..,sinon aficher l'erreur..

        if ($stmt->execute()) {
            echo "Nouveau produit ajouté avec succès";
        } else {
            echo "Erreur lors de l'ajout du produit";
        }

    }


}

$addArticleController = new addArticleController();
$addArticleController->addArticle();