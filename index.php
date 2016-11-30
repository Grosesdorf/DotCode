<?php 
  session_start();

  $_SESSION['auth'] = false;

  if ($_SESSION['auth'] == true){
    header("Location: /views/base.php"); 
  }
  
  include_once "core/config.php";
  include_once "views/header.php";
?>

  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <ul class="nav navbar-nav navbar-right">
        <?php
          if ($_SESSION['auth'] != true){
            echo '<li><button type="button" id="auth" class="btn btn-default navbar-btn">Войти</button></li>';
          }
        ?>
        <?php
          if ($_SESSION['auth'] != true){
            echo '<li><button type="button" id="reg" class="btn btn-default navbar-btn">Регистрация</button></li>';
          }
        ?>
        <?php
          if ($_SESSION['auth'] == true){
            echo '<li><button type="button" id= "exit" class="btn btn-default navbar-btn">Выход</button></li>';
          }
        ?>
      </ul>
    </div>
  </nav>
  <div class="container">
  <h2 class="text-center">Одесская городская библиотека</h2>
  <h1 class="text-center">Добро пожаловать</h1>
  
<?php include_once "views/footer.php";?>