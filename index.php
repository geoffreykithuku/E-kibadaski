<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grocery store Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="bootstrap-5.0.2-dist/js/jquery-3.6.0.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <nav class="navbar navbar-expand-sm navbar-light w-100">
                <div class="container-fluid">
                    <a style="font-size: 20px; font-family: 'Apple Color Emoji';" class="navbar-brand logo1" href="index.php"><span class="logo">E</span><span class="logo1">Kibadaski</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="categories.php">CATEGORY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="foods.php">GROCERY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for groceries.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->
<!--    about us-->
    <section class="about justify-content-center pt-5 bg-light"><br><br>
        <h2 class="text-center">What We Do</h2>
            <p class="text-center w-75justify-content-center d-block p-5"><span class="logo2">E</span><span class="logo3">Kibadaski</span> in an online grocery ordering system that enables people in an estate to order vegetables online.
                Our groceries are fresh and naturally grown. You can customize your order to suit your vegetable needs.
                We ensure that you do not have to trek down to the kibanda.</p>
    </section>
<!--    end of about-->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Our Groceries</h2>

            <a href="category-foods.php">
            <div class="box-3 float-container">
                <img src="images/cab1.jpg" alt="cabbage" class="img-responsive img-curve">

                <h3 class="float-text text-white">Leafy</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/tub2.jpg" alt="tubers" class="img-responsive img-curve">

                <h3 class="float-text text-white">Tubers</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/gro6.jpg" alt="fruits" class="img-responsive img-curve">

                <h3 class="float-text text-white">Fruits</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu ms-auto">
        <div class="container">
            <h2 class="text-center">Grocery Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/sliced.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cabbage</h4>
                    <p class="food-price">Ksh.50.00</p>
                    <p class="food-detail">
                        Grown naturally, cleaned and sliced! Ideal for all home dishes and desserts
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/fru7.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Grapes</h4>
                    <p class="food-price">Ksh.75</p>
                    <p class="food-detail">
                        Handpicked by our experts. Both species, red and blue available.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/tub4.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Sweet Potatoes</h4>
                    <p class="food-price">Ksh.100</p>
                    <p class="food-detail">
                        Delicious. ideal for breakfast. Yams and arrow roots also available
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/bul2.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Onions</h4>
                    <p class="food-price">Ksh.40</p>
                    <p class="food-detail">
                        Give your dishes the taste they deserve. Garlic and red onions available.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/lef2.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Kales</h4>
                    <p class="food-price">Ksh.60</p>
                    <p class="food-detail">
                        Fresh, juice and tender!!. Clean and grown under natural environment.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/lef1.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Kienyeji</h4>
                    <p class="food-price">Ksh.60</p>
                    <p class="food-detail">
                        Are you ready for african veg? Buy Managu, Murenda or Terere!!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="foods.php" class="btn btn-primary">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->

    <!-- footer Section Starts Here -->

    <!-- footer Section Starts Here -->
    <section class="footer bg-info">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Geoffrey</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>