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


    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Our Categories</h2>
            <br><br>
            <h3 class="text-center fw-light text-info">Leafy Vegetables</h3>
            <a href="#">
            <div class="box-3 float-container">
                <img src="images/cab4.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Lettuce</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/lef3.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Spinach</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/sliced2.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Chopped</h3>
            </div>
            </a>


            <a href="#">
            <div class="box-3 float-container">
                <img src="images/cab2.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Sliced</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/lef1.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Kienyeji</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/cab1.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Cabbage</h3>
            </div>
            </a>




            <div class="clearfix"></div>
        </div>
        <div class="container"><br>
           <h3 class="text-center fw-light text-info">Tubers and Bulbs</h3>
            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/bul2.jpg" alt="Pizza" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Onions</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/bul3.jpg" alt="Burger" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Tomatoes</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/tub1.jpg" alt="Momo" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Carrots</h3>
                </div>
            </a>


            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/tub2.jpg" alt="Pizza" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Beetroots</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/gro3.jpg" alt="Burger" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Cucumbers</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/tub4.jpg" alt="Momo" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Sweet Potatoes</h3>
                </div>
            </a>




            <div class="clearfix"></div>
        </div>
        <div class="container"><br>
            <h3 class="text-center fw-light text-info">Fruits</h3>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/berries.jpg" alt="Pizza" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Berries</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/fru1.jpg" alt="Burger" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Apples</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/fru8.jpg" alt="Momo" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Passion</h3>
                </div>
            </a>


            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/fru3.jpg" alt="Pizza" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Mangoes</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/fru5.jpg" alt="Burger" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Grapes</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/orage.jpg" alt="Momo" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Oranges</h3>
                </div>
            </a>




            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


    <!-- social Section Starts Here -->
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer bg-info">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Geoffrey</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>