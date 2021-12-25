<html lang="en">
<head>
<script src="GoalsCreation.js"></script>
<script src="PaymentMenu.js"></script>
<script src="RegisterSkripts.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="Style.css">
<title>Document</title>
</head>
<body>
<!-- Шапка -->
<div class="Shadow" id="RegisterMenu" style="display: none">
	<div class="RegisterMenuBox">
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
				<br><input type="submit" name="" id="reg"></input>
			</form>
			<?php include "checkRegisterValid.php" ?>
		</div>

		<div class="RegisterMenuForms">
			<form action="" method="post">
				<h1>Войти</h1>
				<label for="lUName">*Логин:</label><br>
				<input type="text" id="lUName" name="lUName" required minlength="2" maxlength="30"><br>
				<label for="lPass">*Пароль:</label><br>
				<input type="password" id="lPass" name="lPass" required minlength="5" maxlength="30"><br>
				<input type="submit" name="" id="log"></input>
			</form>
			<?php include "checkAuthorValid.php" ?>
		</div>

		<a class="LowFunctionButton" onclick="CreateRegisterMenu()">закрыть</a>
	</div>
</div>
<div class="Head">
	<div class="Emblem"></div>
	<div class="Navigation"></div>
	<?php
		if(!isset($_SESSION['userName']))		//check autorisation
		{			//registr/autorisation block
		?>
			<div class="AutorisationMenuButtons" onclick="CreateRegisterMenu()">
			<p>Авторизация/<br>Регистрация</p>
		<?php
		}
		else
		{
		?>
			<div class="AutorisationMenuButtons" onclick="CreaterProfilMenu()">
			<p><?php echo $_SESSION['userName']; ?></p>
		<?php
		}
		 ?>
	</div>
</div>

<div class="MainCase">
<!-- Блок с целями сбора -->
<div class="GoalCase" id="GoalsCase">
<h1>Выберите кому помочь:</h1>
</div>
<hr class="Separator" size="1px" noshade>
<!-- Блок оплаты -->
<div class="PaymentCase"><a name="pay"></a>
<h1>Выберите способ оплаты:</h1>
<div class="PayMethodMenu">

</div>
<div class="PaymentFormCase">
<form action="">

</form>
</div>
</div>

<!-- Блок статистики -->
<div class="StatsCase">

</div>
</div>

<!-- Подвал сайта -->
<div class="Footter">

</div>
</body>
</html>