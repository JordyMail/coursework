<?php $data = [
    ["name" => "Milk", "qty" => 2, "price" => 5000],
    ["name" => "Tofu", "qty" => 4, "price" => 10000],
    ["name" => "Tea", "qty" => 3, "price" => 3000],
    ["name" => "Candy", "qty" => 5, "price" => 1000],
    ["name" => "Cookies", "qty" => 4, "price" => 4500],
];

$subtotal = 0;
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Qty</th>
<th>Price</th>
<th>Subtotal</th>
</tr>";
foreach ($data as $item) {
    $subtotal = $subtotal + ($item["qty"] * $item["price"]);
    echo "<tr>";
    echo "<td>" . $item["name"] . "</td>";
    echo "<td>" . $item["qty"] . "</td>";
    echo "<td>" . $item["price"] . "</td>";
    echo "<td>" . ($item["qty"] * $item["price"]) . "</td>";
    echo "</tr>";
}
echo "<tr><td colspan='3'>Total</td><td>" . $subtotal . "</td></tr>";
echo "</table>";