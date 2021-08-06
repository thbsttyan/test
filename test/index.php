<?php
include("UserService.php");

$userService= new userService();
$data = $userService->viewDB();
?>

<!DOCTYPE html>
<html>
<head>
    <h2>Добавить запись</h2>
</head>
<body>
<form name='Add' action='insert.php' method='post'>

    <p>ФИО
        <input type=text name=fio size=12>
    <p/>

    <p>Почта
        <input type=text name=mail size=12>
    <p/>

    <input type='submit' value='Добавить'/>

</form>

<table>
    <tr>
        <th>id</th>
        <th>fio</th>
        <th>mail</th>
    </tr>
    <?php foreach($data as $item) :?>
    <tr>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['fio']; ?></td>
        <td><?php echo $item['mail']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href='search.php'>Поиск по почте</a>
</body>
</html>