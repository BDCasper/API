<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    $connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'Subscribers');
    if(!$connect){
        die('Ошибка при подключении к базе данных');
    }

    $data = mysqli_query($connect, "SELECT * FROM `subscriber`");
    $data = mysqli_fetch_all($data, MYSQLI_ASSOC);
    echo json_encode($data);




