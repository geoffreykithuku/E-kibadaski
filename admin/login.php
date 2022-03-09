<?php include('../config/constants.php'); ?>

<html>
    <head>
        <title>Login - Food Order System</title>
        <link rel="stylesheet" href="../css/admin.css">

        <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/admin.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
        <script src="../bootstrap-5.0.2-dist/js/jquery-3.6.0.js"></script>
    </head>

    <body>
        <div class="row d-flex">
            <div class="col-md-4"></div>
        <div class="login col-md-4">
            <br><br>
            <h2 class="text-center text-info">Login</h2>

            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

            <!-- Login Form Starts HEre -->
            <form action="" method="POST" class=" bg-light p-5">

            <input type="text" name="username"  class="form-control" placeholder="Enter Username"><br><br>

            <input type="password" name="password" class="form-control" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn btn-info w-100">
            <br><br>
                <p class="text-center">Created By - Geoffrey</p>
            </form>
            <!-- Login Form Ends HEre -->


        </div>
            <div class="col-md-4"></div>
        </div>

    </body>
</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/login.php');
        }


    }

?>