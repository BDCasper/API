<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];

$connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'Subscribers');
if(!$connect){
    die('Ошибка при подключении к базе данных');
}

if(mysqli_query($connect, "DELETE FROM `subscriber` WHERE `subscriber`.`id` = '$id'"))
{
    echo json_encode(['msg' => 'Data Deleted Successfully!', 'status' => true]);
} else {
    echo json_encode(['msg' => 'Data Failed to be Deleted!', 'status' => false]);
}

