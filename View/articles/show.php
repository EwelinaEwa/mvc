<?php // This page can be used as a detail page ?>

<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here
 ?>

<section>
    <p><a href="index.php">To home</a></p>

    <?php $selectedTitle=$_GET['title'];
//    var_dump($selectedTitle);
    ?>

    <h1><?= $selectedTitle; ?></h1>

    <?php foreach ($articles as $article) : ?>
<!--        --><?//= var_dump($articles); ?>
        <?php if ($selectedTitle == $article->title){ ?>
            <p><?= $article->description ?></p>
        <?php  } ?>
    <?php endforeach; ?>


</section>

<?php require 'View/includes/footer.php'?>
