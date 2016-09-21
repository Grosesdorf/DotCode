<?php 
	session_start();
	include_once "config.php";
	include_once "header.php";
?>
	<div class="formReg">
		<form action="reg.php" method="post">
			<fieldset>
				<legend>Форма регистрации</legend>
					<table>
						<tr>
							<td>
								<label for="regFirstName">Имя:</label>
							</td>
							<td>
								<input type="text" name="regFirstName" id="regFirstName" value="<?php echo($_SESSION['regFirstName']) ? $_SESSION['regFirstName'] : '';?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="regLastName">Фамилия:</label>			
							</td>
							<td>
								<input type="text" name="regLastName" id="regLastName" value="<?php echo($_SESSION['regLastName']) ? $_SESSION['regLastName'] : '';?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="regEmail">E-mail:</label>	
							</td>
							<td>
								<input type="email" name="regEmail" id="regEmail" placeholder="Он же логин" value="<?php echo($_SESSION['regEmail']) ? $_SESSION['regEmail'] : '';?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="regPass">Пароль:</label>
							</td>
							<td>
								<input type="password" name="regPass" id="regPass"/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="regConfirmPass">Подтвердите пароль:</label>
							</td>
							<td>
								<input type="password" name="regConfirmPass" id="regConfirmPass"/>
							</td>
						</tr>
					</table>
					<div class="radioBorder">
						<fieldset>
							<legend>Пол</legend>
							<input type="radio" name="regGender" value="male" <?php echo $_SESSION['regGender'] ? 
																			  ($_SESSION['regGender'] == "male" ? "checked" : "") : "checked" ?>/>Муж.
							<input type="radio" name="regGender" value="famale" <?php echo $_SESSION['regGender'] == "famale" ? "checked" : "" ?>/>Жен.
							<input type="radio" name="regGender" value="other" <?php echo $_SESSION['regGender'] == "other" ? "checked" : "" ?>/>Другое
						</fieldset>
					</div>
					<div class="checkboxBorder">
						<fieldset>
							
								<legend>Род деятельности</legend>
								<input type="checkbox" name="schoolkid" value="on" <?php echo $_SESSION['schoolkid'] == "on" ? "checked" : "" ?>/>Школьник(-ца)
								<br>
								<input type="checkbox" name="student" value="on" <?php echo $_SESSION['student'] == "on" ? "checked" : "" ?>/>Студент(-ка)
								<br>
								<input type="checkbox" name="worker" value="on" <?php echo $_SESSION['worker'] == "on" ? "checked" : "" ?>/>Рабочий(-ая)
								<br>
								<input type="checkbox" name="farmer" value="on" <?php echo $_SESSION['farmer'] == "on" ? "checked" : "" ?>/>Крестьянин(-ка)
							
						</fieldset>
					</div>
					<fieldset>
						<legend>Дата рождения</legend>
						<div class="tdCenter">
							<select name="bday" class="tdCenter">
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
							/
							<select name="bmonth" class="tdCenter">
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
							/
							<select name="byear" class="tdCenter">
								<option value="<?php echo $_SESSION['byear'] ? $_SESSION['byear'] : "0" ?>"><?php echo $_SESSION['byear'] ? $_SESSION['byear'] : "Год" ?></option>
								<?php 
									for ($i = $settings["byears"]["finish"]; $i >= $settings["byears"]["start"]; $i--){
										echo '<option value="' . $i . '">' . $i . '</option>';}
								?>
							</select> 	
						</div>
					</fieldset>
					<table>
						<tr>
							<td class="tdCenter">
								<input type="submit" name="submit" value="Регистрация" />
							</td>
						</tr>
					</table>
			</fieldset>
		</form>
	</div>
	<?php
	include_once "footer.php";
	?>
