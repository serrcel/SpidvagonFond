<?php
	if(isset($_POST['PaySum']))
	{
		$goal = $_POST['PayGoal'];
		$payMethod = $_POST['PayMethod'];
		$requisites = $_POST['PayCardNumber'];
		$tranzactionSum = $_POST['PaySum'];

		if($tranzactionSum > 0)
		{
			$sql = "SELECT id FROM goals WHERE id = " . $goal . " AND isOpen = 1";
			$result = $conn->query($sql);
			if($result->num_rows != 0)
			{
				$sql = "SELECT id FROM paymentmethod WHERE bankDataLink = '". $payMethod."';";
				$res = $conn->query($sql)->fetch_assoc();
				if(isset($_SESSION['userName']))
				{
					$sql = "SELECT id FROM users WHERE login = '". $_SESSION['userName'] ."';";
					$useId = $conn->query($sql)->fetch_assoc();
					$sql = "INSERT INTO transaction(goalId, paymentMethodId, userId, sum, bankData) VALUES(". $goal .", ". $res['id'] .", ". $useId['id'] .", ". $tranzactionSum .", '". $requisites ."');";
					$conn->query($sql);
				}
				else
				{
					$sql = "INSERT INTO transaction(goalId, paymentMethodId, userId, sum, bankData) VALUES(". $goal .", ". $res['id'] .", 1, ". $tranzactionSum .", '". $requisites ."');";
					$conn->query($sql);
				}
			}
			else
			{
				?>
				<p>Сбор закрыт или не существует</p>
				<?php
			}
		}
		else
		{
			?>
			<p>Сумма перевода должна быть больше нуля</p>
			<?php
		}
		header("Location: http://87.250.7.2:5051/SpidvagonFond/");
	}
?>