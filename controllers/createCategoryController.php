<?php
session_start();
require_once __DIR__ . '/../functions/helpers.php';

// connect db
// $conn = connectDB();

$name = $_POST['name'];
$type = $_POST['type'];

createCategory($name, $type);

// create new record for categories

// INSERT INTO categories (name, type) VALUES ('name', 'type');

// $sql = "INSERT INTO categories (name, type) VALUES ('$name', '$type');";

// $conn->query($sql);

// return with success message
$_SESSION['success'] = 'Category created successfully';

header('Location: ../create.php');
