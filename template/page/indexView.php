
<?php 
require_once('../template/partial/header.php');
?>


<main>
    <section>
        <article>
            <h1>UN GRAND TITRE</h1>
            <p> LE PARAGRAPHE</p>
        </article>
        <?php foreach ($articles as $article) { ?>
	<article>
		<h1><?php echo $article['titre']; ?></h1>

		 <!-- génère un lien pour accéder à la page qui affiche un article, en ajoutant l'id de l'article à la fin de l'url -->
        <h2><a href="http://localhost/piscine_blog_php/public/show-article?id=<?php echo $article['id']; ?>">Afficher Titre</a></h2>
        <h2><a href="http://localhost/piscine_blog_php/public/delete-article?id=<?php echo $article['id']; ?>">Supprimer l'article</a></h2>

    </article>

<?php } ?>
    </section>
</main>


<?php
require_once('../template/partial/footer.php');
?>
