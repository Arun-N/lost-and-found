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

            </div>
        </div>
    </body>
</html>