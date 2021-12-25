<?php include 'dataBase.php' ?>
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
<div class="Shadow" id="RegisterMenu" style="display: none">
	<div class="RegisterMenuBox">
		<?php
			if(!isset($_SESSION['userName']))
				include "registerMenu.php";
			else
				include "profilMenu.php";
		?>
		<a class="LowFunctionButton" onclick="CreateMenu()">закрыть</a>
	</div>
</div>

<!-- Шапка -->
<div class="Head">
	<img class="Logo">
	<nav>
		<ul class = "nav__links">
			<li><a href="#">Пожертвования</a></li>
			<li><a href="#">Оплата</a></li>
			<li><a href="#">Статистика</a></li>
		</ul>
	</nav>
	<a class = "cta" href = "#" onclick="CreateMenu()"><button>Регистрация<button></a>
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