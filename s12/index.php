<?php 
  session_start();
  include_once "config.php";
  include_once "header.php";
?>

  <div class="container">
    <h2 class="text-center">Регистрация</h2>
    <hr>
    <form class="form-horizontal" action="reg.php" method="post">
      <div class="form-group">
        <label class="control-label col-xs-4 col-lg-4" for="regLastName">Фамилия:</label>
        <div class="col-xs-5 col-lg-5">
          <input type="text" class="form-control" 
                             id="regLastName" 
                             name="regLastName"
                             value="<?php echo($_SESSION['regLastName']) ? $_SESSION['regLastName'] : '';?>"
                             placeholder="Введите фамилию">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-xs-4 col-lg-4" for="regFirstName">Имя:</label>
        <div class="col-xs-5 col-lg-5">
          <input type="text" class="form-control" 
                             id="regFirstName" 
                             name="regFirstName" 
                             value="<?php echo($_SESSION['regFirstName']) ? $_SESSION['regFirstName'] : '';?>" 
                             placeholder="Введите имя">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-xs-4 col-lg-4">Дата рождения:</label>
        <div class="col-xs-5 col-lg-5">
          <div class="input-group">
            <span class="input-group-btn">
              <select class="form-control" name="bday">
                <?php if($_SESSION['bday']){
                  echo '<option value="' . $_SESSION['bday'] . '">' . $_SESSION['bday'] . '</option>';
                }
                else{
                  echo '<option value="0">День</option>';
                }
                foreach ($settings["bday"] as $value){ 
                  echo '<option value="' . $value . '">' . $value . '</option>';
                  }
                ?>
              </select>
            </span>
            <span class="input-group-btn">
              <select class="form-control" name="bmonth">
                <?php if($_SESSION['bmonth']){
                  echo '<option value="' . $_SESSION['bmonth'] . '">' . $settings["bmonth"][$_SESSION['bmonth']] . '</option>';
                }
                else{
                  echo '<option value="0">Месяц</option>';
                }
                foreach ($settings["bmonth"] as $key => $value){ 
                  echo '<option value="' . $key . '">' . $value . '</option>';
                  }
                ?>
              </select>
            </span>
            <span class="input-group-btn">
              <select class="form-control" name="byear">
                <option value="<?php echo $_SESSION['byear'] ? $_SESSION['byear'] : "0" ?>"><?php echo $_SESSION['byear'] ? $_SESSION['byear'] : "Год" ?></option>
                <?php 
                  for ($i = $settings["byears"]["finish"]; $i >= $settings["byears"]["start"]; $i--){
                    echo '<option value="' . $i . '">' . $i . '</option>';}
                ?>
              </select>
            </span>
          </div>  
        </div>  
      </div>
      <div class="form-group">
        <label class="control-label col-xs-4 col-lg-4" for="regEmail">Email:</label>
        <div class="col-xs-5 col-lg-5">
          <input type="email" class="form-control" 
                              id="regEmail" 
                              name="regEmail" 
                              value="<?php echo($_SESSION['regEmail']) ? $_SESSION['regEmail'] : '';?>"
                              placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-xs-4 col-lg-4" for="regPass">Пароль:</label>
        <div class="col-xs-5 col-lg-5">
          <input type="password" class="form-control" 
                                 name="regPass" 
                                 id="regPass" 
                                 placeholder="Введите пароль">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-xs-4 col-lg-4" for="regConfirmPass">Подтвердите пароль:</label>
        <div class="col-xs-5 col-lg-5">
          <input type="password" class="form-control" 
                                 name="regConfirmPass" 
                                 id="regConfirmPass" 
                                 placeholder="Введите пароль ещё раз">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-xs-4 col-lg-4">Пол:</label>
        <div class="col-xs-5 col-lg-5 text-center">
          <label class="radio-inline">
            <input type="radio" name="regGender" 
                                value="male" 
                                <?php echo $_SESSION['regGender'] ? ($_SESSION['regGender'] == "male" ? "checked" : "") : "checked" ?>/> Мужской
          </label>
          <label class="radio-inline">
            <input type="radio" name="regGender" 
                                value="famale" 
                                <?php echo $_SESSION['regGender'] == "famale" ? "checked" : "" ?>/>Женский
          </label>
          <label class="radio-inline">
            <input type="radio" name="regGender" 
                                value="other" 
                                <?php echo $_SESSION['regGender'] == "other" ? "checked" : "" ?>/>Другое
          </label>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-xs-4 col-lg-4">Род деятельности:</label>
        <div class="col-xs-5 col-lg-5 text-center">
          <label class="checkbox-inline">
            <input type="checkbox" name="schoolkid" value="on" <?php echo $_SESSION['schoolkid'] == "on" ? "checked" : "" ?>/>Школьник(-ца)
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="student" value="on" <?php echo $_SESSION['student'] == "on" ? "checked" : "" ?>/>Студент(-ка)
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="worker" value="on" <?php echo $_SESSION['worker'] == "on" ? "checked" : "" ?>/>Рабочий(-ая)
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-12 col-lg-12 text-center">
          <label class="checkbox-inline">
            <input class="center-block" type="checkbox" value="agree"> Я согласен с <a href="rules.html"> условиями</a>.
          </label>
        </div>
      </div>
      <br />
      <div class="form-group">
        <div class="col-xs-12 col-lg-12 text-center">
          <input type="submit" class="btn btn-primary" name="submit" value="Регистрация">
        </div>
      </div>
    </form>
    <div class='col-xs-12 col-lg-12 text-center'>
    <hr>
    <h4><a href="cards.php">Карточки читателей</a></h4>
    </div>
    </div>
<?php include_once "footer.php";?>