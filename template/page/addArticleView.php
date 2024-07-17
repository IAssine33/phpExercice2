
<main>

<h1>Ajouter un article</h1>

<!-- Appelez la view depuis le controleur pour l'affichage du message succés ou d'erreur-->
<?php if ($requestIsOk) { ?>

    <p>L'article a bien été enregistré en BDD</p>

<?php }else{ ?>

    <p>Erreur, l'article n'a pas été entregistrer</p>

<?php } ?>

</main>