<?php // This page can be used as a detail page ?>

<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here
 ?>

<section>
    <p><a href="index.php">To home</a></p>

    <h1><?php echo $selectedTitle; ?></h1>
    <p><?php echo $articleDescription ?></p>
    

</section>

<?php require 'View/includes/footer.php'?>
