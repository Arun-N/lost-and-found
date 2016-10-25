<?php
session_start();

if (isset($_SESSION['role'])) {}
else{

    echo "<script>window.open('index.php','_self')</script>";
    exit;
}
    require_once ('singleobj.php');
    require_once ('generateQsearch.php');

    $s=new single();
    $q=new question();



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
                <h1 class="text-center"><?php echo $s->getObjName();?></h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <center><img src="objimg/<?php echo $s->getImgUrl();?>" height="200px" width="250px" id="obj_img" name="obj_img"></center>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <center><h3><?php
                            if($_SESSION['ostatus']=="false")
                            {
                                echo "AVAILABLE";
                            }
                            else
                            {
                                echo "Already claimed";
                            }

                            ?></h3></center>
                </div>

            </div>



            <div class="row">
                <div class="col-md-12">
                    <center><h3>uploaded
                        <?php
                        if($_SESSION['dif']=="0")
                        {
                            echo "Today";
                        }
                        elseif($_SESSION['dif']=="1")
                        {
                            echo "a day ago";
                        }
                        else{
                            echo $_SESSION['dif'].' days ago';
                        }

                        ?></h3></center>
                </div>

            </div>

            <div class="row"><br><br></div>

<?php if($_SESSION['ostatus']=="false") :?>
            <form method="post" action="verify.php">
                <div class="form-group">

                    <!-- Question 1 START -->

                    <?php $q->generate();?>
                    <!-- Question 1 END -->

                    <div class="row"><br><br></div>    <!-- Used for spacing -->

                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success btn-center" id="submit_ans" name="submit_ans">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <?php endif;?>

        </div>
    </body>
</html>