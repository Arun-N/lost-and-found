<?php
include 'config.php';
    if (!isset($_COOKIE["loggedin"]) && $_COOKIE["loggedin"] == false) {
        echo "<script>window.open('index.php','_self')</script>";
        exit;
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
            
            body{
                background-image: url("images/lostORfound_back.png");
                background-repeat: no-repeat;
                background-size: cover;
            }


        </style>
    </head>
    <body>
        <div class="container">
                <a  class="btn btn-primary" style="width: 80px;float: right;margin-right:10px;" id="logout" name="logout" href="logout.php">LOG OUT</a>


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
                    <center><button type="button" class="btn btn-primary" style="width: 80px" id="search" name="search" onclick="">SEARCH</button></center>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <center><button type="button" class="btn btn-primary" style="width: 80px" id="upload" name="upload" onclick="">UPLOAD</button></center>
                </div>
            </div>
        </div>
    </body>
</html>