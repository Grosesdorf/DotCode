<?php
session_start();
include_once "functions.php";
include_once "config.php";

if(!empty($_POST["submit"])){

	$regFirstName = checkInputName($_POST["regFirstName"], "Введите Ваше имя", $errorsArr);
	$_SESSION['regFirstName'] = $regFirstName;
	$regLastName = checkInputName($_POST["regLastName"], "Введите Вашу фамилию", $errorsArr);
	$_SESSION['regLastName'] = $regLastName;
	$regEmail = checkInputEmail($_POST["regEmail"], "Введите корректно Email", $errorsArr);
	$_SESSION['regEmail'] = $regEmail;
	$regPass = checkInputPass($_POST["regPass"], "Длина пароля меньше 6-ти символов", $errorsArr);
	if($regPass == $_POST["regConfirmPass"]){
		$regConfirmPass = $_POST["regConfirmPass"];
	}
	else{
		$regConfirmPass = "";
		$errorsArr[] = "Пароли не совпадают";
	}

	if(!empty($_POST["schoolkid"]) || !empty($_POST["student"]) || !empty($_POST["worker"]) || !empty($_POST["farmer"])){
		$schoolkid = $_POST["schoolkid"];	
		$_SESSION['schoolkid'] = $schoolkid;
		$student = $_POST["student"];
		$_SESSION['student'] = $student;
		$worker = $_POST["worker"];	
		$_SESSION['worker'] = $worker;
		$farmer = $_POST["farmer"];	
		$_SESSION['farmer'] = $farmer;
	}
	else{
		$errorsArr[] = "Выберите род деятельности";
	}

	$regGender = $_POST["regGender"];
	$_SESSION['regGender'] = $regGender;

	if(($_POST["bday"] == 0) || ($_POST["bmonth"] == 0) || ($_POST["byear"] == 0)){
		$errorsArr[] = "Укажите корректно дату рождения";
	}
	else{
		$bday = $_POST["bday"];
		$_SESSION['bday'] = $bday;
		$bmonth = $_POST["bmonth"];
		$_SESSION['bmonth'] = $bmonth;
		$byear = $_POST["byear"];	
		$_SESSION['byear'] = $byear;
	}
}
else{
	header("refresh:5;url=http://" . $_SERVER['SERVER_NAME']);
	echo 'Воспользуйтесь кнопкой "Регистрация" на форме!!!<br>';
	echo "Через 5сек. будет переадресация на страницу регистрации";
	exit();
}

if(empty($errorsArr)){
	$_SESSION = []; 
	echo "Регистрация прошла успешно";
}
else{
	header("refresh:5;url=" . $_SERVER['HTTP_REFERER']);
	include_once "header.php";
	echo "<div class='error'>";
	echo "<ul>";
	foreach ($errorsArr as $key => $value) {
	echo "<li>" . $value . "</li>";
	}
	echo "</ul>";
	echo "<br>Через 5сек. будет переадресация на страницу регистрации";
	echo "</div>";
	include_once "footer.php";
}

?>