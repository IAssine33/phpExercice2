
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
		<p><?php echo $article['content']; ?></p>
        <h2><?php echo $article['created_at']; ?></h2>
	</article>

<?php } ?>
    </section>
</main>


<?php
require_once('../template/partial/footer.php');
?>
