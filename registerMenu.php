<div class="RegisterMenuForms">
	<form action="" method="post">
		<h1>Регистрация</h1>
		<label for="rName">*Имя:</label>
		<br><input type="text" id="rName" name="Name" required minlength="2" maxlength="30"><br>
		<label for="rLName">*Фамилия:</label>
		<br><input type="text" id="rLName" name="LName" required minlength="2" maxlength="30"><br>
		<label for="rUName">*Логин:</label>
		<br><input type="text" id="rUName" name="UName" required minlength="2" maxlength="30">
		<br><label for="rPass">*Пароль:</label><br>
		<input type="password" id="rPas" name="Pass" required minlength="5" maxlength="30">
		<br><label for="rPPass">*Повторите пароль:</label>
		<br><input type="password" id="rPPas" name="PPass" required>
		<br><label for="email">*Введите E-Mail:</label>
		<br><input type="text" id="remail" name="email" required>
		<br><label>Показать пароль <input type="checkbox" onclick="ShowPass()" id="ShowPassButton"></label>
		<br><input class = "regB" type="submit" name="" id="reg"></input>
	</form>
	<?php include "checkRegisterValid.php" ?>
</div>
<div class="RegisterMenuForms2">
	<form action="" method="post">
		<h1>Войти</h1>
		<label for="lUName">*Логин:</label><br>
		<input type="text" id="lUName" name="lUName" required minlength="2" maxlength="30"><br>
		<label for="lPass">*Пароль:</label><br>
		<input type="password" id="lPass" name="lPass" required minlength="5" maxlength="30"><br>
		<input class = "authB" type="submit" name="" id="log"></input>
	</form>
	<?php include "checkAuthorValid.php" ?>
</div>