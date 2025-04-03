<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Sales Order</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="contx">
        <h2>Customer Sales Order</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="order_number">Order Number:</label>
                <input type="text" name="order_number" id="order_number" required>
            </div>

            <div class="form-group">
                <label for="customer_ref">Customer Reference:</label>
                <input type="text" name="customer_ref" id="customer_ref" required>
            </div>

            <div class="form-group">
                <label for="order_date">Order Date:</label>
                <input type="date" name="order_date" id="order_date" required>
            </div>

            <h3>Products</h3>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price (Rp)</th>
                        <th>Discount (%)</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="product_id[]" onchange="updatePrice(this)">
                                <?php
                                
                                $conn = new mysqli("localhost", "root", "", "sales_order_app");
                                $result = $conn->query("SELECT id, name, price FROM Products");
                                while($row = $result->fetch_assoc()) {
                                    echo "<option value='{$row['id']}' data-price='{$row['price']}'>{$row['name']}</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td><input type="number" name="qty[]" min="1" oninput="calculateSubtotal(this)"></td>
                        <td><input type="number" name="price[]" readonly></td>
                        <td><input type="number" name="discount[]" value="0" min="0" max="100" oninput="calculateSubtotal(this)"></td>
                        <td><input type="number" name="subtotal[]" readonly></td>
                    </tr>   a
                </tbody>
            </table>

            <button type="button" class="add-product-btn" onclick="addRow()">Add Product</button><br><br>

            <div class="total">
                <label>Total:</label>
                <input type="number" id="total" readonly>
            </div>

            <input type="submit" class="submit-btn" value="Submit Order">
            
        </form>
        <div class="sumres">
        <div id="order-summary">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $orderNumber = $_POST['order_number'];
                $customerRef = $_POST['customer_ref'];
                $orderDate = $_POST['order_date'];
                $products = $_POST['product_id'];
                $quantities = $_POST['qty'];
                $prices = $_POST['price'];
                $discounts = $_POST['discount'];
                $subtotals = $_POST['subtotal'];
                $total = array_sum($subtotals);

                echo "<h3>Order Summary</h3>";
                echo "<p>Order Number: $orderNumber</p>";
                echo "<p>Customer Reference: $customerRef</p>";
                echo "<p>Order Date: $orderDate</p>";
                echo "<table class='summary-table'>";
                echo "<thead><tr><th>Product</th><th>Quantity</th><th>Price (Rp)</th><th>Discount (%)</th><th>Subtotal</th></tr></thead><tbody>";

                for ($i = 0; $i < count($products); $i++) {
                    $productName = $conn->query("SELECT name FROM Products WHERE id = {$products[$i]}")->fetch_assoc()['name'];
                    echo "<tr>
                            <td>{$productName}</td>
                            <td>{$quantities[$i]}</td>
                            <td>{$prices[$i]}</td>
                            <td>{$discounts[$i]}</td>
                            <td>{$subtotals[$i]}</td>
                          </tr>";
                }
                echo "</tbody></table>";
                echo "<h4>Total Amount: Rp." . number_format($total, 2) . "</h4>";
            }
            ?>
        </div>
        </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
