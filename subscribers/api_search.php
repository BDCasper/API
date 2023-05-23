<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

$data = json_decode(file_get_contents("php://input"), true);

$searchNumber = $data['number'];

$connect = mysqli_connect('localhost', 'root','','subscriber');

if(!$connect)
{
    die('Ошибка при подключении к базе данных');
}

$result = mysqli_query($connect, "SELECT * FROM `subscriber` WHERE `subscriber`.`Номер телефона` = '$searchNumber' ");
if (mysqli_num_rows($result) > 0) {
    $result = mysqli_fetch_assoc($result);

    echo json_decode($result);
} else {
    echo json_encode(['msg' => 'No Data Found to search query!', 'status' => false]);
}
