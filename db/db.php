<?php


// create db 

$user_name = 'root';
$password = 'root';
$host = 'localhost';

$conn = new mysqli($host, $user_name, $password); // mysql - PDO // >>>>> Connect to MYSQL 

$sql = 'CREATE DATABASE IF NOT EXISTS `first_crud_with_mysql`';

$conn->query($sql);
$conn->close();


// create categories table 

$conn = new mysqli($host, $user_name, $password, 'first_crud_with_mysql'); // mysql - PDO // >>>>> Connect to MYSQL AND select DATABASE  

$sql = 'CREATE TABLE IF NOT EXISTS categories (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        type INT(6) NOT NULL
);';

$conn->query($sql);
$conn->close();