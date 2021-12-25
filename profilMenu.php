<?php 
	//$sql = "SELECT * FROM users WHERE login = '" . $_SESSION['userName'] . "'";
	//$result = $conn->query($sql);
	//$user = $result->fetch_assoc();
	$jopa = "jopa";
?>
<div class="Profil">
	<h1>Профиль пользователя</h1>
	<div class="ProfilChapter">
		<h3>Общая информация</h3>
		<?php 
			echo "<p><b>Имя:</b> " . $jopa/*$user['name']*/ . "</p>";
			echo "<p><b>Фамилия:</b> " . $jopa/*$user['lastname']*/ . "</p>";
			echo "<p><b>e-mail:</b> " . $jopa/*$user['email']*/ . "</p>";
			echo "<p><b>Дата регистрации:</b> " . $jopa/*$user['registrDate']*/ . "</p>";
		?>
	</div>
	<div class="ProfilChapter">
		<h3>Финансовая информация</h3>
		<?php 
			echo "<p><b>Всего средств пожертвованно:</b> " . $jopa/*$user['email']*/ . "</p>";
		?>
	</div>
</div>