<?php

include("UserService.php");

$userService = new userService();

if (!empty($_POST['mailSearch'])) {
    $mail = $_POST['mailSearch'];

    $data = $userService->search($mail);
} else {
    $data = null;
}
?>
<!DOCTYPE html>
<html>
<head>
    <h2>Поиск</h2>
</head>
<body>
<form name='Add' action='' method='post'>

    <p>Введите почту
        <input TYPE=text name=mailSearch size=12>
    <p/>

    <input type='submit' value='Поиск'/>

</form>

<?php if($data != null) :?>
<table>
    <tr>
        <th>id</th>
        <th>fio</th>
        <th>mail</th>
    </tr>
    <?php foreach($data as $item) :?>
    <tr>
        <td><?php echo $item['id']?></td>
        <td><?php echo $item['fio']?></td>
        <td><?php echo $item['mail']?></td>
    </tr>
    <?php endforeach ;?>
</table>
<?php endif ;?>

<a href='index.php'>Назад</a>
</body>
