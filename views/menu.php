<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <ul class="nav navbar-nav navbar-right">
        <?php
          if ($_SESSION['auth'] != true){
            echo '<li><button type="button" id="auth" class="btn btn-default navbar-btn">Войти</button></li>';
            echo '<li><button type="button" id="reg" class="btn btn-default navbar-btn">Регистрация</button></li>';
          }
          else{
            echo '<li><button type="button" id= "exit" class="btn btn-default navbar-btn">Выход</button></li>';
          }
        ?>
      </ul>
    </div>
  </nav>
  <script>
    document.querySelector("#auth").addEventListener("click", function(event){
      location.assign(location.href + "views/login.php");
    })
    document.querySelector("#reg").addEventListener("click", function(event){
      location.assign(location.href + "views/registration.php");
    })
  </script>