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