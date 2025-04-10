<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Calculation Helper</title>
</head>
<body>

<form method="post" action="">
    <label for="taxAmount"></label>
    <input type="number" name="taxAmount" required step="0.01">

    <br>

    <label for="hasNPWP">Has NPWP?</label>
    <input type="checkbox" name="hasNPWP">

    <br>

    <input type="submit" value="Calculate Tax">
</form>

<?php
function calculateTax($taxAmount, $hasNPWP) {
    if (!is_numeric($taxAmount) || $taxAmount < 0) {
        echo "Please enter a valid positive number for tax amount.";
        return;
    }
 
    if ($hasNPWP) {
        $finalTax = $taxAmount;
    } else {
        $finalTax = $taxAmount + ($taxAmount * 0.20);
    }

    return $finalTax;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taxAmount = isset($_POST["taxAmount"]) ? $_POST["taxAmount"] : 0;
    $hasNPWP = isset($_POST["hasNPWP"]) ? true : false;

    $finalTax = calculateTax($taxAmount, $hasNPWP);

    if (isset($finalTax)) {
        echo "Tax amount: " . number_format($finalTax, 2);
    }
}
?>



</body>
</html>