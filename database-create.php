<?php

    // SQL-выражение для создания базы данных
    $created_db_sql = "CREATE DATABASE $NAME_DB";

    // выполняем SQL-выражение
    $result = mysqli_query($connect_db, $created_db_sql);

    if (!$result){
        die('Ошибка создания базы данных');
    }

    echo 'Database has been created', "\n";

    mysqli_select_db($connect_db, $NAME_DB);
?>