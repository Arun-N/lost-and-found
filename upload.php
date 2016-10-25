<?php
include ('generateQupload.php');
session_start();
if (isset($_SESSION['role'])) {}
else{

    echo "<script>window.open('index.php','_self')</script>";
    exit;
}
if(isset($_POST['no_of_questions']))
{
    $_SESSION['Qcount']=$_POST['no_of_questions'];
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


            .btn-file {
                position: relative;
                overflow: hidden;
            }
            .btn-file input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                min-width: 100%;
                min-height: 100%;
                font-size: 100px;
                text-align: right;
                filter: alpha(opacity=0);
                opacity: 0;
                outline: none;
                background: white;
                cursor: inherit;
                display: block;
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

            .panel-trans .panel-heading{
                background: rgba(122, 130, 136, 0.8)!important;
            }

            .panel-trans .panel-body{
                background: rgba(46, 51, 56, 0.2)!important;
            }

        </style>
        <script type="text/javascript">
            
            function check_tags() {
                var tag_string = document.getElementById("tags").value;

                if(tag_string.split(",").length > 5){
                    alert("Number of tags should not exceed 5 and at should be least 1");
                    document.getElementById("tags").focus();
                }
            }

            function check_number() {
                var number = document.getElementById("no_of_questions").value;
                if(number < 2 || number > 10){
                    alert("Number of questions should be between 2 and 10");
                    document.getElementById("no_of_questions").focus();
                }
            }
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <nobr>
                <a class="btn btn-primary" style="width: 40px; height: 30px" href="lostORfound.php"><span class="glyphicon glyphicon-home"></span></a>
                <a class="btn btn-primary" id="profile" name="profile" style="width: 90px;float: right;margin-right:50px; margin-top: 10px" href="profile.php">Profile</a>
                <a class="btn btn-primary" style="width: 90px;float: right;margin-right:10px; margin-top: 10px" id="logout" name="logout" href="logout.php">Log out</a>
            </nobr>
            <div class="jumbotron jumbo-trans">
                <h1 class="text-center text-capitalize">Describe the object found</h1>
            </div>

            <form method="post" action="uploadimg.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <?php if(isset($_SESSION['nname']) && $_SESSION['nname']==true): ?>
                        <center><img src="objimg/<?php echo $_SESSION['nname']; ?>" height="150px" width="200px" id="object_img" name="obj_img"></center>
                        <br>
                        <center><?php echo $_SESSION['oname']." "; ?>is selected</center>
                        <?php else: ?>
                        <center><img src="images/upload_img_placeholder.png" height="150px" width="200px" id="object_img" name="obj_img"></center>
                        <?php endif;?>
                        <br>

                        <center>
                            <label class="btn btn-success btn-file">
                                Upload IMG<input type="file" onchange="this.form.submit()" style="display: none" name="file" id="img_upload_btn">
                            </label>
                            <!--<input type="file" class="btn" id="img_upload_btn" name="img_upload_btn" required>-->
                        </center>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </form>


            <form method="post" action="<?php

            if(isset($_SESSION['Qcount']))
            {
                echo "entry.php";
            }
            else{
                echo " ";
            }

                ?>"
            >

                <div class="row"><div class="col-md-12"><br><br></div></div>


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center">Object Name</h3>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="obj_name" name="obj_name" value="<?php
                        if(isset($_POST['obj_name']))
                        {
                            echo $_POST['obj_name'];
                        }


                        ?>" required>
                    </div>
                </div>


                <div class="row"><div class="col-md-12"><br><br></div></div>


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center text-capitalize">Tags</h3>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="tags" name="tags" placeholder="maximum 5 tags separated by comma with no space" onblur="check_tags()" value="<?php
                        if(isset($_POST['tags']))
                        {
                            echo $_POST['tags'];
                        }


                        ?>" required>
                    </div>
                </div>

                <div class="row"><div class="col-md-12"><br><br></div></div>
                <?php if(!isset($_SESSION['Qcount'])): ?>


                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-center">Number of questions</h3>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="no_of_questions" name="no_of_questions" min="2" max="10" value="2" placeholder="Min 2 and Max 10" onblur="check_number()" required>
                        </div>
                    </div>
                    <div class="row">
                        <br>
                        <center><button  type="submit" class="btn btn-success" id="submit_NOQ" name="submit_NOQ">Add Questions</button></center>
                    </div>
                </form>
                <?php endif;?>

                <div class="row"><div class="col-md-12"><br><br></div></div>

                <?php
                    if(isset($_SESSION['Qcount']))
                    {
                        $q =new question();
                        $q->generate($_SESSION['Qcount']);

                    }

                ?>


                <div class="row"><div class="col-md-12"><br><br></div></div>
                <?php if(isset($_SESSION['Qcount'])):?>
                <center><button type="submit" class="btn btn-success" id="submit_obj_details" name="submit_obj_details">Submit</button></center>
            </form>
            <?php endif;?>
        </div>
    </body>
</html>