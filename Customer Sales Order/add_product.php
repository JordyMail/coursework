<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Add New Product</h2>
        <form action="save_product.php" method="POST">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" required step="0.01" min="0">
            </div>

            <input type="submit" class="submit-btn" value="Add Product">
        </form>
        <br>

        <form action="index.php" method="get">
            <input type="submit" class="back-btn" value="Back to Home">
        </form>
    </div>
</body>
</html>
