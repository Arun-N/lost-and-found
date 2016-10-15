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
            .well{
                margin-top: 100px;
            }

            .jumbo-trans{
                background: transparent;
                margin: auto;
            }

            body{
                background-image: url("images/login_background.jpg");
                background-repeat: no-repeat;
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

            label{
                color: #46b8da;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron jumbo-trans text-center">
                <h1 style="color: dodgerblue">Some Fancy Title And Logo</h1>
            </div>
            <div class="panel panel-trans">
                <div class="panel-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="mail_id">Email ID</label>
                            <input type="email" id="mail_id" name="mail_id" class="form-control" required>
                            <br><br>
                            <label for="pwd">Password</label>
                            <input type="password" id="pwd" name="pwd" class="form-control" required>
                            <br>
                            <button type="submit" class="btn btn-success" id="sub_login" name="sub_login">Login</button>
                        </div>
                    </form>
                    <hr>
                    <p>New User? Sign up over <a href="signup.php">here</a></p>
                </div>
            </div>
        </div>
    </body>
</html>