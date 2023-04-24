<?php

$connect_db = mysqli_connect('localhost', 'root', '');
$statement = $$connect_db->query('SHOW DATABASE wishlist');
print_r( $statement->fetchAll() );

?>