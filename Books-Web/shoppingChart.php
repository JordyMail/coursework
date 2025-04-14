<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Venue - Responsive Web Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

       

    </head>

<body>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/logo5c.png" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="index.php">Home</a></li>
                                <li><a href="#">Gendre</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Novel</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Science</a></li>
                                                <li><a href="#">horror</a></li>
                                                <li><a href="#">Romantic</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Comic</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Science</a></li>
                                                <li><a href="#">horror</a></li>
                                                <li><a href="#">Romantic</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Encyclopedia</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Science</a></li>
                                                <li><a href="#">chemistry</a></li>
                                                <li><a href="#">astronomy</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Biography</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">historical figure</a></li>
                                                <li><a href="#">Nobel laureate</a></li>
                                                <li><a href="#">Infentor</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Fairytale</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Horror</a></li>
                                                <li><a href="#">science</a></li>
                                                <li><a href="#">Romantic</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="scrollTo" data-scrollTo="blog" href="#">Coming Soon</a></li>
                                <li><a class="scrollTo" data-scrollTo="services" href="#">Our Services</a></li>
                               
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
    <?php
session_start();

// Read the contents of the shopping cart
$cartFile = 'shoppingChart.php';
$books = file($cartFile, FILE_IGNORE_NEW_LINES);

// Display the contents of the shopping cart
echo "<h2>Shopping Cart</h2>";
foreach ($books as $book) {
    echo "<p>$book</p>";
}

// Provide options to adjust quantity or proceed to purchase
echo "<form action='purchase.php' method='post'>";
echo "<label for='quantity'>Quantity:</label>";
echo "<input type='number' id='quantity' name='quantity' value='1' min='1'><br>";
echo "<input type='submit' value='Update Quantity'>";
echo "</form>";

echo "<form action='checkout.php' method='post'>";
echo "<input type='submit' value='Proceed to Checkout'>";
echo "</form>";
?>


</body>
</html>