<?php
include ('config.php');
session_start();
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
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- navigation bar end -->

    </div>

    <div class="jumbotron jumbo-trans">
        <h1 class="text-center">All Unclaimed Objects</h1>
    </div>
    <hr>
    <div class="panel panel-trans">
        <div class="panel-body" id="search_contents">

            <!-- RESULT PAGE TEMPLATE STARTS HERE -->
            <div class="row">
                <?php

                $q=mysqli_query($conn,"SELECT * FROM `object` WHERE `status`='false'");
                if($q)
                {
                    while ($row=mysqli_fetch_array($q))
                    {
                        echo '<div class="col-md-4">'.
                            '<div class="input-group">'.
                            '<span class="input-group-addon"><img href="object.php?id='.$row['obj_id'].'" src="objimg/'.$row['img_url'].'" height="150px" width="150px"></span>'.
                            '<h3>&nbsp;&nbsp;'.$row['obj_name'].'</h3>'.
                            '</div>'.
                            '</div>';

                    }
                }


                ?>
            </div>

            <!-- RESULT PAGE TEMPLATE ENDS HERE -->
        </div>
    </div>


</div>
</body>
</html>