<?php
$conn = new mysqli("localhost", "root", "", "sales_order_app");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $stmt = $conn->prepare("INSERT INTO Products (name, price) VALUES (?, ?)");
    $stmt->bind_param("sd", $name, $price);
    
    if ($stmt->execute()) {
        header("Location: add_product.php");
        exit(); 
    } else {
        echo "Error: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>
