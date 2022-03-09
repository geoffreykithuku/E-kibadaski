<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="bootstrap-5.0.2-dist/js/jquery-3.4.0.js"></script>
    <script src="bootstrap-5.0.2-dist/js/popper.min.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
            <nav class="navbar navbar-expand-sm navbar-light w-100 ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><span class="logo">E</span><span class="logo1">Kibadaski</span></a>
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



    <!-- fOOD MEnu Section Starts Here -->
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Grocery Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/sliced.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cabbage</h4>
                    <p class="food-price">Ksh.50</p>
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
                    <p class="food-price">Ksh.70</p>
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
                    <p class="food-price">ksh.60</p>
                    <p class="food-detail">
                        Are you ready for african veg? Buy Managu, Murenda or Terere!!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/lef3.jpg" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Spinach</h4>
                    <p class="food-price">Ksh.60</p>
                    <p class="food-detail">
                        Tender, fresh and free of chemicals. sliced for fast preparation.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/fru2.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Apples</h4>
                    <p class="food-price">Ksh.70</p>
                    <p class="food-detail">
                        An apple a day, keep the doctor away. Tasty and Fresh!!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/gro5.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Watermelons</h4>
                    <p class="food-price">Ksh.100</p>
                    <p class="food-detail">
                        Ideal for a hot day. natural, tasty and fresh!!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/tub1.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Carrots</h4>
                    <p class="food-price">Ksh.40</p>
                    <p class="food-detail">
                        Can be used in almost all home dishes. fresh and clean!!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/gro3.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Spices</h4>
                    <p class="food-price">ksh.25</p>
                    <p class="food-detail">
                        All Natural! Pepper, Dhania and many more available
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/fru3.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Mangoes</h4>
                    <p class="food-price">Ksh.30</p>
                    <p class="food-detail">
                        Natural, tasty, fresh and juicy. Ideal for salads, juices, etc.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/tub5.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Beetroots & Cucumbers</h4>
                    <p class="food-price">Ksh.30</p>
                    <p class="food-detail">
                        Grown naturally, juicy and fresh. Order your tuber now!!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/fru8.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Passion</h4>
                    <p class="food-price">Ksh.30</p>
                    <p class="food-detail">
                        Sweet and juicy!!. Fresh and grown naturally. Ideal for juice.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>



            <div class="clearfix"></div>



        </div>


        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer bg-info">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Geoffrey</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>