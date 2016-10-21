<?php
session_start();
require_once ('generateprofile.php');
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

        .panel-trans {
            background: none;
            color: #0f0f0f;
            font-size: 20px;
        }

        .panel-trans .panel-heading {
            background: rgba(122, 130, 136, 0.4)!important;
        }

        .panel-trans .panel-body {
            background: rgba(46, 51, 56, 0.2)!important;
        }

        hr{
            border-color: black;
            height: 2px;
        }
    </style>
</head>
<body>
<div class="container">
    <a class="btn btn-primary" id="logout" style="margin-left: 90%; margin-top:15px;" href="logout.php">Logout</a>
    <div class="jumbotron jumbo-trans">
        <h1 class="text-center">HI<?php echo ' '.$_SESSION['user'];?></h1>
    </div>
    <hr>
    <div class="panel panel-trans">
        <div class="panel-body" id="search_contents">
            <h4>Search Result Example</h4>
            <!-- RESULT PAGE TEMPLATE STARTS HERE -->
            <div class="row">
                <?php

                if(isset($_SESSION['uid']))
                {
                    $o=new obj();
                    $o->generate($_SESSION['uid']);

                }



                ?>
            </div>

            <!-- RESULT PAGE TEMPLATE ENDS HERE -->
        </div>
    </div>
</div>
</body>
</html>