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

            .panel-trans {
                background: none;
                color: #0f0f0f;
                font-size: 20px;
            }

            .panel-trans .panel-heading {
                background: rgba(122, 130, 136, 0.4)!important;
            }

            .panel-trans .panel-body {
                background: rgba(46, 51, 56, 0.4)!important;
            }

            .btn-center {
                float: none;
                margin-top: 15%;
                margin-left: 30%;
                height: 100px;
                width: 100px;
                font-size: 20px;
            }


        </style>
    </head>
    <body>
        <div class="container">
            <button type="button" class="btn btn-primary" id="logout" style="margin-left: 90%; margin-top:15px;">Logout</button>
            <div class="jumbotron jumbo-trans"><h1 class="text-center">Object name over here</h1></div>

            <div class="row">
                <div class="col-md-3">
                    <img src="images/upload_img_placeholder.png" height="200px" width="250px" id="obj_img" name="obj_img">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success btn-center" id="submit_ans" name="submit_ans">Submit</button>
                </div>
            </div>
            <div class="row"><br><br></div>
            <form method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="answer1" id="question1">Question 1 over here</label>
                            <input type="text" class="form-control" id="answer1" name="answer1" placeholder="answer" required>
                        </div>
                    </div>
                    <div class="row"><br><br></div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="answer2" id="question2">Question 2 over here</label>
                            <input type="text" class="form-control" id="answer2" name="answer2" placeholder="answer" required>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>