<?

    require_once 'sql-queries.php';

    // выполняем SQL-выражение
foreach ($create_queries as $name => $query) {
        $result = mysqli_query($connect_db, $query);

        if (!$result){
            echo(mysqli_error($connect_db));
            die("Ошибка создания таблицы, $name \n");
        }

        echo "Table $name has been created \n";
    }

    echo "Tables: users, wishlists and wishes has been created \n";
?>