<?php require "../views/components/head.php" ?>
<?php require "../views/components/navbar.php" ?>

<?php

if (!$_SESSION["user"]) {
  header("Location: /../login");
  die();
}

require "../views/index.view.php";