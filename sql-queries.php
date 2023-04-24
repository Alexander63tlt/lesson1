<?php

$create_queries = [
    'create_table_users' => "CREATE TABLE users(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        password VARCHAR(30) NOT NULL,
        email VARCHAR(300) NOT NULL,
        active BOOLEAN NOT NULL,
        UNIQUE (email))",

    'create_table_wishlists' => "CREATE TABLE wishlists (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        title TEXT NOT NULL,
        active BOOLEAN NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users (id))",

    'create_table_wishes' => "CREATE TABLE wishes (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        wishlist_id INT NOT NULL,
        title VARCHAR(300) NOT NULL,
        price TEXT NOT NULL,
        link TEXT NOT NULL,
        img_link TEXT NOT NULL,
        active BOOLEAN NOT NULL,
        FOREIGN KEY (wishlist_id) REFERENCES wishlists (id))",
];

$insert_queries = [
    'users' => [
        "INSERT INTO users (name, password, email, active) VALUES
        ('Denis','123456789','denis@yandex.ru','1'),
        ('Igor','123123','igor@yandex.ru','1'),
        ('Alex','112233','alex@yandex.ru','0')"],

    'wishlists' => [
        "INSERT INTO wishlists (user_id, title, active) VALUES
        ('1','ручка','1'),
        ('2','фломастер','1'),
        ('3','линейка','0')"],

    'wishes' => [
        "INSERT INTO wishes (wishlist_id,title,price,link,img_link,active) VALUES
        ('1','магазин','10 рублей','www','www','1'),
        ('2','магазин','20 рублей','www','www','1'),
        ('3','магазин','50 рублей','www','www','1')"],
]


?>