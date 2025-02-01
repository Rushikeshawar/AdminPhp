<?php
include "db.php";
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully! <a href='show_products.php'>View Products</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
