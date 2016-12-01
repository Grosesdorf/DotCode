<?php 
  session_start();

  $_SESSION['auth'] = false;

  if ($_SESSION['auth'] == true){
    header("Location: /views/base.php"); 
  }
  
  include_once "core/config.php";
  include_once "views/header.php";
  include_once "views/menu.php";
?>

<div class="container">
<h2 class="text-center">Одесская городская библиотека</h2>
<h1 class="text-center">Добро пожаловать</h1>
  
<?php include_once "views/footer.php";?>