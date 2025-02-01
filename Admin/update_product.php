<?php
include "db.php";
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}

$product = null; // Initialize $product to avoid undefined errors

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM products WHERE id = $id");

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        $error_message = "Product not found!";
    }
} else {
    $error_message = "Invalid Product ID!";
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $sql = "UPDATE products SET name='$name', price='$price', description='$description' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            $success_message = "Product updated successfully! <a href='show_products.php'>View Products</a>";
        } else {
            $error_message = "Error: " . $conn->error;
        }
    } else {
        $error_message = "Invalid Product ID!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
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
        .update-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .update-container h2 {
            margin-bottom: 20px;
        }
        .update-container input, .update-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .update-container button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .update-container button:hover {
            background-color: #218838;
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
    <div class="update-container">
        <h2>Update Product</h2>
        <?php 
        if (!empty($success_message)) echo "<p class='message success'>$success_message</p>"; 
        if (!empty($error_message)) echo "<p class='message error'>$error_message</p>"; 
        ?>

        <?php if ($product): ?>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
            <input type="number" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required>
            <textarea name="description"><?php echo htmlspecialchars($product['description']); ?></textarea>
            <button type="submit">Update Product</button>
        </form>
        <?php else: ?>
            <p class="error">No product found to update.</p>
        <?php endif; ?>
    </div>
</body>
</html>
