<?php
include_once "includes/header.php";
?>

<h1>Домашняя</h1>
<?php
if (isset($_GET['url']) && !empty($_GET['url'])) : ?>

  <a href="index.php">На главную</a>

<?php endif;?>

<?php
include_once "includes/footer.php";
?>
