<?php

include("UserService.php");

$fio = $_POST["fio"];
$mail = $_POST["mail"];

$class = new userService();
$class->insert($fio, $mail);

header("Location: http://localhost/test/index.php");

