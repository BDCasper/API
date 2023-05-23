<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$number = $data['number'];
$address = $data['address'];
$day = $data['day'];
$period = $data['period'];
$products = $data['products'];
$a = time() + 3600*24*31;
$deadline = date('Y.m.d',$a);


$connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'Subscribers');
if(!$connect){
    die('Ошибка при подключении к базе данных');
}


if(mysqli_query($connect, "INSERT INTO `subscriber` (`Номер телефона`, `Адресс`, `День недели`, `Период доставки`, `Корзина`, `Срок подписки`) VALUES ('$number', '$address', '$day', 'Каждую $period неделю', '$products', '$deadline')"))
{
    echo json_encode(['msg' => 'Data Inserted Successfully!', 'status' => true]);
} else {
    echo json_encode(['msg' => 'Data Failed to be Inserted!', 'status' => false]);
}


