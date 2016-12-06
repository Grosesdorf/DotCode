<?php 
  include_once $_SERVER["DOCUMENT_ROOT"] . "/core/config.php";
  include_once $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";
?>

<h2 class="text-center">Регистрация</h2>
<div class="invalid-form-error-message text-center"></div>
<hr>

<form class="form-horizontal form-reg" action="reg.php" method="post" data-parsley-validate="">
  <div class="form-group">
    <label class="control-label col-xs-4 col-lg-4" for="regLastName">Фамилия:</label>
    <div class="col-xs-5 col-lg-5">
      <input type="text" class="form-control" 
                         id="regLastName" 
                         name="regLastName"
                         placeholder="Введите фамилию" 
                         data-parsley-length="[2, 20]" data-parsley-group="block1"
                         required="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-4 col-lg-4" for="regFirstName">Имя:</label>
    <div class="col-xs-5 col-lg-5">
      <input type="text" class="form-control" 
                         id="regFirstName" 
                         name="regFirstName" 
                         placeholder="Введите имя"
                         data-parsley-length="[2, 20]" data-parsley-group="block1"
                         required="">
    </div>
  </div>
  <div class="form-group">
     <label class="control-label col-xs-4 col-lg-4">Дата рождения:</label>
     <div class="col-xs-5 col-lg-5">
       <div class="input-group">
         <span class="input-group-btn">
           <select class="form-control" name="bday" data-parsley-group="block1" required="">
            <option value="">День</option>
              <?php 
                foreach ($settings["bday"] as $value){ 
                  echo '<option value="' . $value . '">' . $value . '</option>';
                }
              ?>
           </select>
         </span>
         <span class="input-group-btn">
           <select class="form-control" name="bmonth">
            '<option value="">Месяц</option>'
              <?php 
                foreach ($settings["bmonth"] as $key => $value){ 
                  echo '<option value="' . $key . '">' . $value . '</option>';
                }
              ?>
           </select>
         </span>
         <span class="input-group-btn">
           <select class="form-control" name="byear">
             <option value="">Год</option>
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
        <input type="radio" name="regGender" value="male">Мужской
      </label>
      <label class="radio-inline">
        <input type="radio" name="regGender" value="famale">Женский
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
  <!-- <br /> -->
  <div class="form-group">
    <div class="col-xs-12 col-lg-12 text-center">
      <input type="submit" class="btn btn-primary validate" value="Регистрация">
    </div>
  </div>
</form>

<?php include_once "../views/footer.php";?>