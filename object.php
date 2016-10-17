<?php
    require_once ('singleobj.php');
    session_start();
    $s=new single();

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
                margin-top: 50px;
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
                <h1 class="text-center"><?php echo $s->getObjName();?></h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <center><img src="objimg/<?php echo $s->getImgUrl();?>" height="200px" width="250px" id="obj_img" name="obj_img"></center>
                </div>

            </div>
            <div class="row"><br><br></div>
            <form method="post" action="verify.php">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="answer1" id="question1"><?php echo $s->getQ1();?></label>
                            <center><input type="text" class="form-control" id="answer1" name="answer1" placeholder="answer" required></center>
                        </div>
                    </div>
                    <div class="row"><br><br></div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="answer2" id="question2"><?php echo $s->getQ2();?></label>
                            <center><input type="text" class="form-control" id="answer2" name="answer2" placeholder="answer" required></center>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success btn-center" id="submit_ans" name="submit_ans">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <?php
                $_SESSION['a1']=$s->getA1();
                $_SESSION['a2']=$s->getA2();
            ?>
        </div>
    </body>
</html>