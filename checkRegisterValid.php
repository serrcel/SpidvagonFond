<?php 		//check valid Register form
	if (isset($_POST['UName'])) 
	{
		$name = $_POST['Name'];
		$lastName = $_POST['LName'];
		$userName=$_POST['UName'];
		$userPassword=$_POST['Pass'];
		$secondPassword=$_POST['PPass'];
		if(strlen($userName)>1 and strlen($userName)<=30)
		{
			if(strlen($userPassword)>0 and strlen($userPassword)<=30)
			{
				if($userPassword == $secondPassword)
				{
					$sql = "SELECT login, password FROM users WHERE UserName = '" . $userName . "' AND Password = '" . $userPassword . "'";
					$result = $conn->query($sql);
					if($result->num_rows == 0)
					{
						$sql = "INSERT INTO `users` (`id`, `name`, `lastname`, `login`, `password`, `email`, `registerDate`) VALUES (NULL, '". $name ."', '". $lastName ."', '". $userName ."', '". $userPassword ."', '', current_timestamp())";
						if($conn->query($sql))
						{
							$_SESSION['userName']=$userName;
							echo "<script>window.location.reload(true)</script>";
						}
						else
						{
							echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
					}
					else
					{
						?>
						<p>ERROR: this user already exists!</p>
						<?php
					}
				}
				else
				{
					?>
					<p>Password not confirmed</p>
					<?php
				}
			}
			else
			{
				?>
				<p>Password must have length from 1 to 30</p>
				<?php
			}
		}
		else
		{
			?>
			<p>User name must have length from 2 to 30</p>
			<?php
		}
	}
?>