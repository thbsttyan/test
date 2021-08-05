<?php
include("firstClass.php");

$conn = new mysqli("localhost", "root", "", "bd");



echo "<h2>Добавить запись</h2>";

echo"<form name='Add' action='insert.php' method='POST'>";
echo"
            <P>ФИО
            <INPUT TYPE=text NAME=fio SIZE=12>
            <P/>    

            <P>Почта
            <INPUT TYPE=text NAME=mail SIZE=12>
            <P/>

            <input type='submit' value='Добавить'/>
            ";

echo"</form>";

$class = new firstClass();
$class->viewDB();

echo"<a href='search.php'>Поиск по почте</a>";

