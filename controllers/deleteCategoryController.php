<?php

session_start();
require_once __DIR__ . '/../functions/helpers.php';

// id 
// delete form database where id == id

$id = $_POST['id'];

deleteCategory($id);

$_SESSION['success'] = 'Category deleted successfully';

header('Location: ../index.php');
