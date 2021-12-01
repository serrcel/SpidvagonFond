<?php
session_start();
$ServerName = "localhost"; //Server Name
$UserName = "root"; //User Name
$DataBase = "spidvagon"; //Data Base Name
$UPassword = "";

$conn = new mysqli($ServerName, $UserName, $UPassword, $DataBase); //writing a connection to the conn variable

if (mysqli_connect_errno()) //checking the connection success
{
printf("Соединение не удалось: %s\n", mysqli_connect_error());
exit();
}
?>