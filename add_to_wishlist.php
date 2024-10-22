<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taskrecluse";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if required parameters are set
if (isset($_GET['product_id']) && isset($_GET['product_name']) && isset($_GET['product_image']) && isset($_GET['product_price'])) {
    // Get the parameters
    $product_id = intval($_GET['product_id']);
    $product_name = $_GET['product_name'];
    $product_image = $_GET['product_image'];
    $product_price = floatval($_GET['product_price']);

    // Debugging output to ensure values are received
    echo "Product ID: " . htmlspecialchars($product_id) . "<br>";
    echo "Product Name: " . htmlspecialchars($product_name) . "<br>";
    echo "Product Image: " . htmlspecialchars($product_image) . "<br>";
    echo "Product Price: " . htmlspecialchars($product_price) . "<br>";

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO wishlist (product_id, product_name, product_image, product_price) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("issd", $product_id, $product_name, $product_image, $product_price);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to miniprojectgrocery.php after successful insertion
        header("Location: miniprojectgrocery.php");
        exit(); // Ensure no further code is executed
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request. Required parameters are missing.";
}
?>
