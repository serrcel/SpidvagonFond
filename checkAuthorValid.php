<?php
	if(isset($_POST['lUName']))
	{
		$userName=$_POST['lUName'];
		$userPassword=$_POST['lPass'];
		if(strlen($userName)>1 and strlen($userName)<=30)
		{
			if(strlen($userPassword)>4 and strlen($userPassword)<=30)
			{
				$sql = "SELECT login, password FROM users WHERE login = '" . $userName . "' AND password = '" . $userPassword . "'";
				$result = $conn->query($sql);
				if($result->num_rows == 1)
				{
					$sql = "UPDATE users SET lastVisitDate = current_timestamp() WHERE login = '" . $userName . "' AND password = '" . $userPassword . "'";
					$conn->query($sql);
					$sql = "SELECT * FROM users WHERE login = '" . $_POST['lUName'] . "' AND password = '" . $_POST['lPass'] . "'";
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					$_SESSION['userName']=$userName;
					echo "<script>window.location.reload(true)</script>";
				}
				else
				{
					echo "<p>Пользователь не существует</p>";
				}
			}
		}
		else
		{
			?>
			<p>User name must have length from 2 to 30</p>
			<?php
		}
		header("Location: http://87.250.7.2:5051/SpidvagonFond/");
	}
?>