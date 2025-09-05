<?php include('includes/header.php'); ?>

<?php
$sites = json_decode(file_get_contents('sites.json'), true);

// Get the category from URL
$filterCategory = isset($_GET['category']) ? $_GET['category'] : null;
?>

<?php include('includes/hero.php'); ?>



<?php include('includes/intro.php'); ?>



<main class="container">

 





<?php include('includes/category-list.php'); ?>

<?php include('includes/articles.php'); ?>

<?php include('includes/feature-sites.php'); ?>

</main>

<?php include('includes/footer.php'); ?>
