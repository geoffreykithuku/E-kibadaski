
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
    <script src="bootstrap-5.0.2-dist/js/jquery-3.6.0.js"></script>
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

<section class="contact1 d-flex">
    <div class="col-md-2"></div>
    <div class="col-md-4 pt-3">
    </div>
    <div class="col-md-4  pt-1">
        <h4 class="">Send Us A Message</h4>
    <form class="" method="post" action="">
        <input type="text" class="form-control" placeholder="Enter your name"><br>
        <input type="email" class="form-control" placeholder="Enter your email"><br>
        <textarea name="" class="form-control" cols="50" placeholder="Enter your message" rows="4"></textarea><br>
        <input type="submit" value="Send" class="btn btn-primary w-100" name="send">
    </form>
    </div>
    <div class="col-md-4"></div>
</section>

<!-- footer Section Starts Here -->
<section class="footer bg-info">
    <div class="container text-center">
        <p>All rights reserved. Designed By <a href="#">Geoffrey</a></p>
    </div>
</section>
<!-- footer Section Ends Here -->
</body>
</html>
