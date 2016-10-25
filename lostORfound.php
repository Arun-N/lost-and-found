<?php

include 'config.php';
session_start();


    if (isset($_SESSION['role'])) {}
    else{

    echo "<script>window.open('index.php','_self')</script>";

}

?>


<html>
    <head>
        <title>Lost & Found</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <style>

            .jumbo-trans{
                background: transparent;
                margin: auto;
            }

            body {
                background: url(images/alternative_bg_img.jpg) no-repeat fixed;
                background-size: cover;
            }


        </style>
    </head>
    <body>
        <div class="container">
                <nobr>
                    <a class="btn btn-primary" id="profile" name="profile" style="width: 90px;float: right;margin-right:50px; margin-top: 10px" href="profile.php">Profile</a>
                    <a class="btn btn-primary" style="width: 90px;float: right;margin-right:10px; margin-top: 10px" id="logout" name="logout" href="logout.php">Log out</a>
                </nobr>

            <div class="jumbotron jumbo-trans">
                <h1 class="text-center">DID YOU...</h1>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <h2 class="text-center">LOSE SOMETHING?</h2>
                </div>
                <div class="col-md-4">
                    <h2 class="text-center">OR</h2>
                </div>
                <div class="col-md-4">
                    <h2 class="text-center">FIND SOMETHING ?</h2>
                </div>
            </div>
            <div class="row">
                <br><br>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center><a class="btn btn-primary" style="width: 80px" id="search" name="search" href="search.php">SEARCH</a></center>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <center><a  class="btn btn-primary" style="width: 80px" id="upload" name="upload" href="upload.php">UPLOAD</a></center>
                </div>
            </div>
        </div>
    </body>
</html>