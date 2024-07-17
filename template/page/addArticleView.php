
<?php 
require_once('../template/partial/header.php');
?>
    <main>

    <h1>Ajouter un article</h1>

    <form method="post">
        <label for="title">Titre</label>

        <input type="text" name="titre">
        <label for="content">Contenu</label>
        <input type="text" name="content">
        <input type="submit" value="Envoyer le formulaire" />

    </form>



    <!-- Appelez la view depuis le controleur pour l'affichage du message succés ou d'erreur-->

    
        
        <?php if ($requestIsOk) { ?>
            
            <p>L'article a bien été enregistré en BDD</p>

    <?php }else{ ?>

        <p>Erreur, l'article n'a pas été entregistrer</p>

    <?php } ?>

    










    </main>

<?php
require_once('../template/partial/footer.php');
?>