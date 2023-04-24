<?php
// выполняем SQL-выражение
foreach ($insert_queries as $name => $queries) {
    foreach ($queries as $query) {
        $result = mysqli_query($connect_db, $query);

        if (!$result) {
            echo (mysqli_error($connect_db));
            die("Ошибка внесения данных, $name \n");
        }

        echo "Данные в таблицу $name успешно наполнены \n";
    }
}

echo "Все ок \n";
