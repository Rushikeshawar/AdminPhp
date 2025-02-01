<?php
// session_start();
// if (!isset($_SESSION['admin'])) {
//     header("Location: login.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 15px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Welcome</h1>
    <div class="navbar">
        <a href="add_product.php">Add Product</a>
        <a href="show_products.php">Show Products</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <p>Use the navigation bar to manage products.</p>
    </div>
</body>
</html>
