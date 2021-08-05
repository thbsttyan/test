<?php

include("firstClass.php");

$conn = new mysqli("localhost", "root", "", "bd");

$fio = $_POST["fio"];
$mail = $_POST["mail"];

$class = new firstClass();
$class->insert($fio, $mail);

header( "Location: http://localhost/test/firstFile.php" );

