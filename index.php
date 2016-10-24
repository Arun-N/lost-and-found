<?php
include 'config.php';
session_start();

// establishing the MySQLi connection
if (mysqli_connect_errno()){
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
}
// checking the user
if(isset($_POST['sub_login'])){
    $email = $_POST['mail_id'];
    $pass = $_POST['pwd'];
    $MD5pass=  md5($pass);
    $sel_user = "select * from `user` where `email_id`='$email' AND `password`='$MD5pass'";
    $run_user = mysqli_query($conn, $sel_user);


    $check_user = mysqli_num_rows($run_user);
    if($check_user>0){
        $row = mysqli_fetch_assoc($run_user);
        $_SESSION['uid']=$row['uid'];
        $_SESSION['user']=$row['u_name'];
        $_SESSION["loggedin"]=1;
        $_SESSION["eid"]= $email;
        echo "<script>window.open('lostORfound.php','_self')</script>";
    }
    else {
        echo "<script>alert('Email or password is not correct, try again!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
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


            .panel-trans .panel-body{
                background: rgba(46, 51, 56, 0.4)!important;
            }

            label{
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron jumbo-trans text-center">
                <h1 style="color: dodgerblue">THE LOST AND FOUND</h1>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="panel panel-trans col-md-4">
                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="mail_id">Email ID</label>
                                    <input type="email" id="mail_id" name="mail_id" class="form-control" required>
                                    <br><br>
                                    <label for="pwd">Password</label>
                                    <input type="password" id="pwd" name="pwd" class="form-control" required>
                                    <br>
                                    <center><button type="submit" class="btn btn-success" id="sub_login" name="sub_login">Login</button></center>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <p>New User? Sign up over <a href="signup.php">here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>