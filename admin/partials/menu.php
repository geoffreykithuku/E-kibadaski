<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>



<html>
<head>
    <title>Kibadaski Grocery Store - Home Page</title>

    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/jquery-3.6.0.js"></script>
</head>

<body>
<!-- Menu Section Starts -->
<div class="row d-flex">
    <div class="col-md-3"></div>
    <div class="wrapper col-md-6 p-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-admin.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-category.php">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-food.php">Grocery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-order.php">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
        </ul>
    </div>
    <div class="col-md-3"></div>
</div>