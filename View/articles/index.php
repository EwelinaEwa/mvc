<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>


<section>
    <p><a href="index.php">To home</a></p>

    <ul>
        <?php foreach ($articles as $article) : ?>
            <li><a href="<?= 'index.php?page=show&title='. $article->title?>"> <?= $article->title ?> - <?= $article->formatPublishDate('DD-MM-YYYY') ?> </a></li>
        <?php endforeach; ?>


    </ul>
</section>

<?php require 'View/includes/footer.php'?>