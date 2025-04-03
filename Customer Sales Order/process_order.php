<?php
$conn = new mysqli("localhost", "root", "", "sales_order_app");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO Orders (order_number, customer_ref, order_date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_POST['order_number'], $_POST['customer_ref'], $_POST['order_date']);
    $stmt->execute();
    $order_id = $stmt->insert_id;

    $stmt = $conn->prepare("INSERT INTO Order_Items (order_id, product_id, qty, discount, subtotal) VALUES (?, ?, ?, ?, ?)");
    for ($i = 0; $i < count($_POST['product_id']); $i++) {
        $product_id = $_POST['product_id'][$i];
        $qty = $_POST['qty'][$i];
        $discount = $_POST['discount'][$i];
        $subtotal = $_POST['subtotal'][$i];
        $stmt->bind_param("iiidd", $order_id, $product_id, $qty, $discount, $subtotal);
        $stmt->execute();
    }

    echo "Order submitted successfully!";
}
?>
