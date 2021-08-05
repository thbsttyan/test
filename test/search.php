<?php

include("firstClass.php");

$conn = new mysqli("localhost", "root", "", "bd");

echo "<h2>Поиск</h2>";

echo"<form name='Add' action='' method='POST'>";
echo"
            <P>Введите почту
            <INPUT TYPE=text NAME=mailSearch SIZE=12>
            <P/>    

            <input type='submit' value='Поиск'/>
            ";

echo"</form>";

$class = new firstClass();

if(!empty($_POST['mailSearch'])) {
    $mail = $_POST['mailSearch'];

    $class->search($mail);
}
else{
    echo"Поле пустое";
}

echo"<a href='firstFile.php'>Назад</a>";

