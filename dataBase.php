<?php
session_start();
$ServerName = "localhost";
$UserName = "root";
$DataBase = "spidvagon";
$UPassword = "";

$conn = new mysqli($ServerName, $UserName, $UPassword, $DataBase);

if (mysqli_connect_errno())
{
printf("Соединение не удалось: %s\n", mysqli_connect_error());
exit();
}
?>