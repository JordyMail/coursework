
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
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="shoppingChart.php">Shopping Chart</a></li>
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
      

    
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2><strong>Find Your Dream Books</strong></h2>
                        <span><strong>Books can develop intelligence, develop character, and even change the world, but without being read, they are meaningless..</strong></span>
                        <div class="blue-button">
                            <a class="scrollTo" data-scrollTo="popular" href="#">Recommended</a>
                        </div>
                    </div>
                    <div class="submit-form">
                        <form id="form-submit" action="" method="get">
                            <div class="row">
                                <div class="col-md-3 first-item">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Book name..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-3 second-item">
                                    <fieldset>
                                        <input name="location" type="text" class="form-control" id="location" placeholder="Type/gendre..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-3 third-item">
                                    <fieldset>
                                        <select required name='category' onchange='this.form.()'>
                                            <option value="">Select category...</option>
                                            <option value="Shops">Shops</option>
                                            <option value="Hotels">Hotels</option>
                                            <option value="Restaurants">Restaurants</option>
                                            <option value="Events">Events</option>
                                            <option value="Meetings">Meetings</option>
                                            <option value="Fitness">Fitness</option>
                                            <option value="Cafes">Cafes</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-3">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Search Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-places" id="popular">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Recommended</span>
                        <h2>Find your Books</h2>
                    </div>
                </div> 
            </div> 
            <div class="owl-carousel owl-theme">
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/AtomicHabits.jpeg" alt="">
                        <div class="layer1">
                            <div class="text-content">
                                <h4>Atomic Habits</h4>
                                <span>76 listings</span>
                            </div>
                            <div class="plus-button">

                            <a href="../../e_commerce/index.php"><i class="fa fa-plus"></i></a>
                            

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/tokyoZM.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Tokyo Zodiac Murder</h4>
                            <span>18 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href=""><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/blackSM.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Black Showman</h4>
                            <span>55 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/filosofiT.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Filosofi Teras</h4>
                            <span>66 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/LautBercerita.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Laut bercerita</h4>
                            <span>82 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/secretsODL.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Secret of Divine Love</h4>
                            <span>76 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/herryPoah.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Harry Potter</h4>
                            <span>36 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/kimJiYeong.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Kim-Ji-Yeong</h4>
                            <span>48 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/OP98.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>One Piece 98</h4>
                            <span>66 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/LordOTRings.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Lord Of The Rings</h4>
                            <span>85 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/startWW.png" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Start With Why?</h4>
                            <span>76 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/narnia.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Narnia</h4>
                            <span>32 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/bumiTL.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>Bumi</h4>
                            <span>49 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/TheGOF.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>The God Father</h4>
                            <span>63 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img2/briefHistoryOT.jpeg" alt="">
                        <div class="layer1">
                        <div class="text-content">
                            <h4>A Brief History Of Time</h4>
                            <span>86 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="featured-places" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Coming Soon</span>
                        <h2>Best seller book</h2>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img2/theWoman.jpeg" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="date-content">
                                <h6>28</h6>
                                <span>August</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Lorem ipsum dolor</h4>
                            <span>Category One</span>
                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>
                            <div class="row">
                                <div class="col-md-6 first-button">
                                    <div class="text-button">
                                        <a href="#">Add to favorites</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-button">
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img2/tAnxiousG.jpeg" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="date-content">
                                <h6>20</h6>
                                <span>September</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Nullam nibh lacus</h4>
                            <span>Category Two</span>
                            <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere.</p>
                            <div class="row">
                                <div class="col-md-6 first-button">
                                    <div class="text-button">
                                        <a href="#">Add to favorites</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-button">
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img2/housemaid.jpeg" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="date-content">
                                <h6>12</h6>
                                <span>October</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Suspendisse semper non</h4>
                            <span>Category Three</span>
                            <p>Praesent iaculis gravida elementum. Proin fermentum neque facilisis semper pharetra. Sed vestibulum vehicula tincidunt.</p>
                            <div class="row">
                                <div class="col-md-6 first-button">
                                    <div class="text-button">
                                        <a href="#">Add to favorites</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-button">
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>



    <section class="our-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>cart</span>
                        <h2>Selected books</h2>
                    </div>
                </div> 
                
                <blockquote>
                     <?php
                // Include your database connection here
                

                // Check if BookID is provided in URL
                if (isset($_GET['BookID'])) {
                    $bookID = $_GET['BookID'];
                    $sql = "SELECT * FROM bookstore WHERE BookID = '$BookID'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output book details in table
                        while ($row = $result->fetch_assoc()) {
                            echo "<table id='myTable' style='width:80%; float:left'>";
                            echo "<tr>";
                            echo "<td>";
                            echo "<table>";
                            echo "<tr>";
                            echo "<td><img src='" . $row['Image'] . "' width='80%'></td>";
                            echo "</tr>";
                            echo "<tr><td style='padding: 5px;'>Title: " . $row['BookTitle'] . "</td></tr>";
                            echo "<tr><td style='padding: 5px;'>ISBN: " . $row['ISBN'] . "</td></tr>";
                            echo "<tr><td style='padding: 5px;'>Author: " . $row['Author'] . "</td></tr>";
                            echo "<tr><td style='padding: 5px;'>Type: " . $row['Type'] . "</td></tr>";
                            echo "<tr><td style='padding: 5px;'>$" . $row['Price'] . "</td></tr>";
                            echo "<tr><td style='padding: 5px;'>";
                            echo "<form action='' method='post'>";
                            echo "Quantity: <input type='number' value='1' name='quantity' style='width: 20%'><br>";
                            echo "<input type='hidden' value='" . $row['BookID'] . "' name='ac'>";
                            echo "<input class='btn' type='submit' value='Add to Cart'>";
                            echo "</form></td></tr>";
                            echo "</table>";
                            echo "</td>";
                            echo "</tr>";
                            echo "</table>";
                        }
                    } else {
                        echo "No book found.";
                    }
                    $conn->close();
                }
                ?>
</blockquote>

            </div> 
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/logo5.png" alt="Venue Logo">
                        </div>
                        <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst.</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#"><i class="fa fa-stop"></i>Help FAQs</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Register</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Login</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>My Profile</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>How It Works?</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>More About Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#"><i class="fa fa-stop"></i>Our Clients</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Partnerships</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Blog Entries</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p>Praesent iaculis gravida elementum. Proin fermentum neque facilisis semper pharetra. Sed vestibulum vehicula tincidunt.</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">010-050-0550</a></li>
                            <li><span>Email:</span><a href="#">hi@company.co</a></li>
                            <li><span>Address:</span><a href="#">company.co</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright &copy; 2018 Company Name 
    
    	- Design: <a rel="nofollow
        
        " href="http://www.bookS.com">Template Mo</a></p>
    </div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script> 1
    
    <script src="js/datepicker.js"></script> 2
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

   
<script>

</script>

</body>
</html>