<?php
include 'config.php';
session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true)
    {
        echo "<script>window.open('lostORfound.php','_self')</script>";
    }

    if (isSet($_POST['signup_sub']) && isSet($_POST['u_email']) && isSet($_POST['u_pwd']) && $_POST['u_email'] != '' && $_POST['u_pwd'] != '')
    {
        $name=$_POST['u_name'];
        $mob=$_POST['u_mobile'];
        $pass = $_POST['u_pwd'];
        $passMD5 = md5($pass);
        $user = $_POST['u_email'];
        $q = mysqli_query($conn, "SELECT * FROM `user` WHERE `email_id`='$user'") ;
        if (mysqli_num_rows($q) ){
            echo '<script language="javascript">';
            echo 'alert("User Id Already Taken!")';
            echo '</script>';

        }else{
            $qq = mysqli_query($conn, "INSERT INTO `user` VALUES ('','$user','$name','$passMD5','$mob','normal')");
            if ($qq) {
                echo '<script language="javascript">';
                echo 'alert("Successfully Registered! now login using id and password");';
                echo "window.open('index.php','_self');";
                echo '</script>';
            }else{
                echo '<script language="javascript">';
                echo 'alert("Something Went Wrong!")';
                echo '</script>';
            }
        }
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

            .panel-trans {
                background: none;
                color: #0f0f0f;
                font-size: 20px;
            }

            .panel-trans .panel-heading{
                background: rgba(122, 130, 136, 0.4)!important;
            }

            .panel-trans .panel-body{
                background: rgba(46, 51, 56, 0.4)!important;
            }


        </style>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron jumbo-trans text-center">
                <div class="panel panel-trans">
                    <div class="panel-heading">
                        <h1 class="text-capitalize" style="color: dodgerblue">Create an account</h1>
                        <h4 class="text-capitalize" style="color: red;">All fields are mandatory</h4>
                    </div>
                </div>
            </div>
            <form method="post" action="">
                <div class="panel panel-trans col-md-4">
                    <div class="panel-body">
                        <div>
                            <div class="form-group" style="color: #46b8da">
                                <label for="u_name">Username </label>
                                <input type="text" class="form-control" id="u_name" name="u_name" required>
                                <br>
                                <label for="u_email">Email ID </label>
                                <input type="email" class="form-control" id="u_email" name="u_email" required>
                                <br>
                                <label for="u_mobile">Mobile No. </label>
                                <input type="text" class="form-control" id="u_mobile" name="u_mobile" pattern="[0-9]{10}" required>
                                <br>
                                <label for="u_pwd">Password </label>
                                <input type="password" class="form-control" id="u_pwd" name="u_pwd" required>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" id="signup_sub" name="signup_sub" style="height: 120px; width: 150px; font-size: 30px; margin-left: 20%; margin-top: 10%">Sign Up</button>
            </form>
        </div>
    </body>
</html>