<?php
session_start();
include ('config.php');

if (isset($_SESSION['role'])) {
    if($_SESSION['role']=='normal')
    {
        echo "<script>window.open('lostORfound.php','_self')</script>";
    }
}
else
{
    echo "<script>window.open('index.php','_self')</script>";
}
exit;

$u=mysqli_query($conn,"SELECT * FROM `user` WHERE `role`='normal'");
$users=mysqli_num_rows($u);
$_SESSION['userno']=$users;

$unob=mysqli_query($conn,"SELECT * FROM `object` WHERE `status`='false'");
$obj=mysqli_num_rows($unob);
$_SESSION['unob']=$obj;


?>




<html>
    <head>
        <title>Admin Page</title>

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
                background: url(images/admin_back.jpg) no-repeat fixed;
                background-size: cover;
            }

            .btn-center {
                float: none;
                margin-top: 50px;
            }

            .panel-trans {
                background: url(images/admin_info_back.jpg) no-repeat;
                color: #0f0f0f;
                font-size: 20px;
            }

            .panel-trans .panel-heading{
                background: rgba(122, 130, 136, 0.8)!important;
            }

            .panel-trans .panel-body{
                background: rgba(46, 51, 56, 0.2)!important;
            }


        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- navigation bar start -->
                <div class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.php">THE LOST AND FOUND</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="admin_panel.php">Home</a></li>
                            <li><a href="user_panel.php">Users</a></li>
                            <li><a href="object_panel.php">Lost Objects</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;Logout</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- navigation bar end -->

                <div class="jumbotron jumbo-trans">
                    <h1 class="text-center">
                        WELCOME ADMIN!
                        <br><br>
                        Current Site Information Is As Follows
                    </h1>
                </div>

                <div class="panel panel-trans">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-center" style="color: white">
                                    Total Number Of Users Registered
                                    <br><br>
                                    ---- <?php echo $_SESSION['userno'];?> ----
                                </h2>
                            </div>
                            <div class="col-md-6">
                                <h2 class="text-center" style="color: white">
                                    Total Number Of Objects Still Unclaimed
                                    <br><br>
                                    ---- <?php echo $_SESSION['unob'];?> ----
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>