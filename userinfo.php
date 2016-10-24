<?php
session_start();
include ('config.php');
$id=$_GET['id'];
$q=mysqli_query($conn,"SELECT * from `user` WHERE `uid`='$id'");

while($row=mysqli_fetch_assoc($q))
{
    $_SESSION['name2']=$row['u_name'];
    $_SESSION['email2']=$row['email_id'];
    $_SESSION['mobno2']=$row['mob_no'];
}


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

        .panel-trans {
            background: none;
            color: #0f0f0f;
            font-size: 20px;
        }

        .panel-trans .panel-body{
            background: rgba(46, 51, 56, 0.2)!important;
        }

        .list-group-item{
            background-color: #0f0f0f;
            color: white;
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
                    <li><a href="admin_panel.php">Home</a></li>
                    <li class="active"><a href="user_panel.php">Users</a></li>
                    <li><a href="object_panel.php">Lost Objects</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-out">&nbsp;Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- navigation bar end -->

        <div class="row">
            <div class="col-md-12">
                <center><h1>USER INFORMATION</h1></center>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <center><h3>NAME: <?php echo $_SESSION['name2'];?></h3></center>
                <center><h3>EMAIL: <?php echo $_SESSION['email2'];?></h3></center>
                <center><h3>Mob No: <?php echo $_SESSION['mobno2'];?></h3></center>
            </div>

        </div>

        <div class="jumbotron jumbo-trans">
            <h1 class="text-center">Uploaded By<?php echo ' '.$_SESSION['name2'];?></h1>
        </div>
        <hr>
        <div class="panel panel-trans">
            <div class="panel-body" id="search_contents">
                <h4>Objects you have uploaded</h4>
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
</div>
</body>
</html>