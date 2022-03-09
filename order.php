<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="bootstrap-5.0.2-dist/js/jquery-3.4.0.js"></script>
    <script src="bootstrap-5.0.2-dist/js/popper.min.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <nav class="navbar navbar-expand-sm navbar-light w-100">
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
    <section class="contact1 pt-4">
        <div class="row pt-0 d-flex">
            <h2 class="text-center text-primary">Fill this form to confirm your order.</h2>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <form action="">
                    <fieldset class="d-block p-3 bg-light">
                        <legend class="">Selected Food</legend>
                        <div class="food-menu-img">
                            <img src="images/cab1.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve" style="">
                        </div>
                        <div class="food-menu-desc">
                            <h3>Food Title</h3>
                            <p class="food-price">$2.3</p>

                            <input type="number" name="qty" placeholder="Quantity" class="input-responsive w-auto" required>

                        </div>

                    </fieldset>

                </form>
            </div>
            <div class="col-md-6">

            <form action="#" class="order">

                <fieldset>
                    <legend>Delivery Details</legend>

                    <input type="text" name="full-name" placeholder="full Name" class="input-responsive" required>

                    <input type="tel" name="contact" placeholder="Phone Number" class="input-responsive form-control" required>

                    <input type="email" name="email" placeholder="Email Address" class="input-responsive form-control" required>

                    <textarea name="address" rows="3" placeholder="Address" class="input-responsive form-control" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>
            </div>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer bg-info">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Geoffrey</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>