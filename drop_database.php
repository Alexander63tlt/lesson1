<?php
    require_once 'config.php';
    require_once 'db-connect.php';


    $drop_db_sql = "DROP DATABASE wishlist";

    // выполняем SQL-выражение
    $result = mysqli_query($connect_db, $drop_db_sql);

    if (!$result){
        die('Ошибка удаления базы данных');
    }

    echo 'database deleted', "\n";

    mysqli_select_db($connect_db, $NAME_DB);
    $connect_db->close();
?>