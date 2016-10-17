<?php
    session_start();
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
                background-image: url("images/alternative_bg_img.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <a class="btn btn-primary" id="logout" style="margin-left: 90%; margin-top:15px;" href="logout.php">Logout</a>
            <div class="jumbotron jumbo-trans">
                <h1 class="text-center">YOUR LOST ITEM HAS BEEN FOUND!</h1>
                <h1 class="text-center">BY</h1>
                <div class="row">
                    <div class="col-md-6">
                        <h2>NAME:<?php echo $_SESSION['name'];?><br><br>MOBILE:<?php echo $_SESSION['mob'];?><br><br>EMAIL ID:<?php echo $_SESSION['emid'];?></h2>
                    </div>
                    <div class="col-md-6">
                        <center><img src="images/vault_boy_thubs_up.png" width="200px" height="200px" style="background-size: cover"></center>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>