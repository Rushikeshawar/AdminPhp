<?php
include "db.php";
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";
    if ($conn->query($sql) === TRUE) {
        $success_message = "Product added successfully! <a href='show_products.php'>View Products</a>";
    } else {
        $error_message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .product-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .product-container h2 {
            margin-bottom: 20px;
        }
        .product-container input, .product-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .product-container button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .product-container button:hover {
            background-color: #0056b3;
        }
        .message {
            margin-top: 10px;
            font-weight: bold;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="product-container">
        <h2>Add New Product</h2>
        <?php 
        if (!empty($success_message)) echo "<p class='message success'>$success_message</p>"; 
        if (!empty($error_message)) echo "<p class='message error'>$error_message</p>"; 
        ?>
        <form method="POST">
            <input type="text" name="name" placeholder="Product Name" required>
            <input type="number" name="price" placeholder="Price" required>
            <textarea name="description" placeholder="Product Description"></textarea>
            <button type="submit">Add Product</button>
        </form>
    </div>
</body>
</html>
