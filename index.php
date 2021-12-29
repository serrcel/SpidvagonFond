<?php include 'dataBase.php' ?>
<html lang="en">
<head>
	<script src="GoalsCreation.js"></script>
	<script src="PaymentMenu.js"></script>
	<script src="RegisterSkripts.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<title>Фонд Спидвагона</title>
</head>

<body>
	<div class="Shadow" id="RegisterMenu" style="display: none">
		<div class="RegisterMenuBox">
			<span onclick = "CreateMenu()" class='close-block'></span>
			<?php
				if(!isset($_SESSION['userName']))
					include "registerMenu.php";
				else
					include "profilMenu.php";
			?>
		</div>
	</div>

	<!-- Шапка -->	
	<header>
		<img class="logo" src="hat.png">
		<nav>
			<ul class="navlinks">
				<li><a href = "#Ggoal">Список сборов</a></li>
				<li><a href = "#pay">Оплата</a></li>
				<li><a>Статистика</a></li>
			</ul>
		</nav>
		<a onclick="CreateMenu()">
			<?php 
			if(!isset($_SESSION['userName']))
			{
				echo "<button>Регистрация и авторизация</button>";
			}
			else
			{
				echo "<button>". $_SESSION['userName'] ."</button>";
			}
			?>
		</a>
	</header>

	<div class="MainCase">
		<!-- Блок с целями сбора -->
		<div class="GoalCase" id="GoalsCase"><a name="Ggoal"></a>
		<h1>Выберите кому помочь:</h1>
		<?php include "checkGoalValid.php" ?>
		</div>

		<hr class="Separator" size="1px" noshade>
		<!-- Блок оплаты -->
		<div class="PaymentCase"><a name="pay"></a>
			<h1>Платите как удобно:</h1>
			<div class="PayMethodMenu" id="PayMethodMenu">
				
			</div>
			<div class="PaymentFormCase">
				<form action="" method="post">
					<h1>Оплата</h1>
					<label for="PayGoal">Идентификатор сбора:</label><br>
					<input type="text" id="PayGoal" name="PayGoal" minlength="16" maxlength="16" required><br>
					<label for="PayMethod">Целевой счёт:</label><br>
					<input type="text" id="PayMethod" name="PayMethod" readonly><br>
					<label for="PayCardNumber">Номер карты:</label><br>
					<input type="text" id="PayCardNumber" name="PayCardNumber" minlength="16" maxlength="16" required><br>
					<label for="PaySum">Размер платежа:</label><br>
					<input type="text" id="PaySum" name="PaySum" required><br>
					<input type="submit" name="" id="log"></input>
				</form>
				<?php include "checkPayValid.php" ?>
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
<?php 
	$sql = "SELECT emblem, name, bankDataLink FROM paymentmethod";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc())
	{
		echo "<script>CreatePayMethod('". $row['emblem'] ."', '". $row['name'] ."', ". $row['bankDataLink'] .");</script>";
	}

	$sql = "SELECT id, goal, description, currentSum, goalSum FROM goals WHERE isOpen = 1 AND verified != 0";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc())
	{
		echo "<script>CreateGoal(".$row['id'].", '".$row['goal']."', '".$row['description']."', ".$row['currentSum'].", ".$row['goalSum'].");</script>";
	}
	echo "<script>CreateDesigner()</script>";
?>