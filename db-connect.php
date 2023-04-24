<?php

$connect_db = mysqli_connect($HOST_DB, $USER_DB, $USER_PASSWORD);

if (!$connect_db){
    die('Ошибка подключения к БД');
}

echo 'Connection to the database was successful =)', "\n";

?>