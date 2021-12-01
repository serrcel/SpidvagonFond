<?php
session_start();
$ServerName = "localhost";
$UserName = "root";
$DataBase = "spidvagon";
$UPassword = "";

$conn = new mysqli($ServerName, $UserName, $UPassword, $DataBase);


?>