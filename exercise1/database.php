<?php



$connect = mysqli_connect('127.0.0.1', 'root', '', 'auto');
if ($connect == false)
{
    echo "Ошибка подключения к БД";
}

$brand = $_POST['brand'];
$model = $_POST['model'];
$colour = $_POST['colour'];
$number = $_POST['number'];
$price = $_POST['price'];

print_r($_POST);
mysqli_query($connect, "INSERT INTO `db_auto` (`id`, `brand`, `model`, `colour`, `number`, `price`) VALUES (NULL, '$brand', '$model', '$colour', '$number', '$price')");
header('Location: /');
