<?php
	$sql = "SELECT * FROM users WHERE login = '" . $_SESSION['userName'] . "'";
	$result = $conn->query($sql);
	$user = $result->fetch_assoc();
?>
<div class="Profil">
	<h1>Профиль пользователя</h1>

	<div class="ProfilChapter">
		<h3>Общая информация</h3>
		<?php 
			echo "<p><b>Имя:</b> " . $user['name'] . "</p>";
			echo "<p><b>Фамилия:</b> " . $user['lastname'] . "</p>";
			echo "<p><b>e-mail:</b> " . $user['email'] . "</p>";
			echo "<p><b>Дата регистрации:</b> " . $user['registrDate'] . "</p>";
		?>
	</div>
	<br></br>
	<div class="ProfilChapter2">
		<h3>Финансовая информация</h3>
		<?php
			$sql = "SELECT SUM(sum) FROM transaction WHERE userId = ". $user['id'] .";";
			$result = $conn->query($sql)->fetch_assoc();
			echo "<p><b>Всего средств пожертвованно:</b> " . $result['SUM(sum)'] . "</p>";
		?>
	</div>
	<br><br>
	<form action="" method="post">
		<input class = "authB" type="submit" name="drop" value="Выйти">
	</form>
	
	<?php 
		if(isset($_POST['drop']))
		{
			$_SESSION['userName']=NULL;
			echo "<script>window.location.reload(true)</script>";
		}
	?>
</div>