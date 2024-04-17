<?php


function connectDB()
{
    $user_name = 'root';
    $password = 'root';
    $host = 'localhost';

    // connect db
    $conn = new mysqli($host, $user_name, $password, 'first_crud_with_mysql'); // mysql - PDO // >>>>> Connect to MYSQL AND select DATABASE  

    return $conn;
}

function createCategory($name, $type)
{
    $conn = connectDB();
    $sql = "INSERT INTO categories (name, type) VALUES ('$name', '$type');";

    $conn->query($sql);

    $conn->close();
}

function getAllCategories()
{
    $conn = connectDB();
    $sql = "SELECT * FROM categories";

    $data = $conn->query($sql); // 6

    $categories = $data->fetch_all(MYSQLI_ASSOC);

    $conn->close();

    return $categories;
}

function deleteCategory($id)
{
    $conn = connectDB();

    $sql = "DELETE FROM categories WHERE id = $id";

    $conn->query($sql);

    $conn->close();
}
