<?php 
	if(isset($_POST['PaySum']))
	{
		$goal = $_POST['PayGoal'];
		$payMethod = $_POST['PayMethod'];
		$requisites = $_POST['PayCardNumber'];
		$tranzactionSum = $_POST['PaySum'];

		if($tranzactionSum > 0)
		{
			$sql = "SELECT id FROM goals WHERE id = '" . $goal . "' AND isOpen = 1";
			$result = $conn->query($sql);
			if($result->num_rows != 0)
			{
				$sql = "UPDATE goals SET currentSum = currentSum+". $tranzactionSum ." WHERE id = ". $goal .";";
				if($conn->query($sql))
				{
					$sql = "SELECT id FROM paymentmethod WHERE bankDataLink = ". $payMethod.";";
					$res = $conn->query($sql)->fetch_assoc();
					$sql = "INSERT INTO transaction(goalId, paymentMethodId, userId, sum, bankData) VALUES(". $goal .", ". $res['id'] .", ". $_SESSION['userName'] .", ". $tranzactionSum .", '". $requisites ."');";
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
	}
?>