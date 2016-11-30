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

	if(!empty($_POST["schoolkid"]) || !empty($_POST["student"]) || !empty($_POST["worker"])){
		$schoolkid = $_POST["schoolkid"];	
		$_SESSION['schoolkid'] = $schoolkid;
		$student = $_POST["student"];
		$_SESSION['student'] = $student;
		$worker = $_POST["worker"];	
		$_SESSION['worker'] = $worker;
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
	$listUsersArr[] = $regLastName . " ";
	$listUsersArr[] = $regFirstName . " ";
	$listUsersArr[] = $regEmail . " ";
	$listUsersArr[] = $bday . " ";
	$listUsersArr[] = $bmonth . " ";
	$listUsersArr[] = $byear . "\r\n";

	file_put_contents("accounts.txt", $listUsersArr, FILE_APPEND | LOCK_EX);

	$file = "accounts.txt";
	$handle = fopen($file, "rb");
	$contents = fread($handle, filesize($file));
	fclose($handle);

	$_SESSION = []; 

	include_once "header.php";
	echo "<div class='container'>";
    echo "<h2 class='text-center'>Регистрация прошла успешно</h2>";
    echo "<hr>";
    echo "<div class='col-xs-12 col-lg-12 text-center'>";
    echo "<img src='image_png.php' alt='Image'><br>";
	echo "</div>";
	echo "</div>";
	include_once "footer.php";
	
	// echo "<pre>";
	// print_r($contents);
	// echo "</pre>";
}
else{
	header("refresh:5;url=" . $_SERVER['HTTP_REFERER']);
	include_once "header.php";
	echo "<div class='container'>";
	echo "<div class='col-xs-12 col-lg-12 text-center'>";
	echo "<ul>";
	foreach ($errorsArr as $key => $value) {
	echo '<li class="list-group-item list-group-item-danger">' . $value . '</li>';
	}
	echo "<li class='list-group-item list-group-item-warning'>Через 5сек. будет переадресация на страницу регистрации</li>";
	echo "</ul>";
	echo "</div>";
	echo "</div>";
	include_once "footer.php";
}

?>