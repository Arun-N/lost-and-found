<!--
/**
 * Created by PhpStorm.
 * User: Arun
 * Date: 10/21/2016
 * Time: 10:42 AM
 */

This file is only for temporary display of Front End during development -->

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

            .btn-center {
                float: none;
                margin-top: 50px;
            }

            .panel-trans {
                background: none;
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
        <div class="container">
            <nobr>
                <a class="btn btn-primary" id="profile" name="profile" style="width: 90px;float: right;margin-right:50px; margin-top: 10px" href="profile.php">Profile</a>
                <a class="btn btn-primary" style="width: 90px;float: right;margin-right:10px; margin-top: 10px" id="logout" name="logout" href="logout.php">Log out</a>
            </nobr>
            <div class="jumbotron jumbo-trans">
                <h1 class="text-center">Object name</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <center><img src="images/upload_img_placeholder.png" height="200px" width="250px" id="obj_img" name="obj_img"></center>
                </div>

            </div>
            <div class="row"><br><br></div>
            <form method="post" action="verify.php">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-trans">
                                <div class="panel-heading">
                                    <h3 class="text-center">Question 1</h3>
                                </div>
                                <div class="panel-body">
                                    <h3>Question 1 over here</h3>
                                    <div class="row"><div class="col-md-12"><br></div></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="q1_ans1"><input type="radio" name="radio_answer" id="q1_ans1" checked>&nbsp;&nbsp;Answer 1</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="q1_ans2"><input type="radio" name="radio_answer" id="q1_ans2">&nbsp;&nbsp;Answer 2</label>
                                        </div>
                                    </div>

                                    <div class="row"><div class="col-md-12"><br><br></div></div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="q1_ans3"><input type="radio" name="radio_answer" id="q1_ans3">&nbsp;&nbsp;Answer 3</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="q1_ans4"><input type="radio" name="radio_answer" id="q1_ans4">&nbsp;&nbsp;Answer 4</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"><br><br></div>
                    <div class="row">
                        <div class="col-md-12">
                            <center><button type="submit" class="btn btn-success btn-center" id="submit_ans" name="submit_ans">Submit</button></center>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>