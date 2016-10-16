<?php
session_start();
if($_SESSION['uid']== 4)
{
    echo '<script language="javascript">';
    echo 'alert("you are sonu");';
    echo '</script>';
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
                background-image: url("images/lostORfound_back.png");
                background-repeat: no-repeat;
                background-size: cover;
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
        </script>
    </head>
    <body>
        <div class="container-fluid">
                <a  class="btn btn-primary" id="logout" name="logout" style="margin-top: 15px; margin-left: 90%" href="logout.php">Logout</a>
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

            <form method="post" action="entry.php" >
                <div class="row"><div class="col-md-12"><br><br><br><br></div></div>


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center">Object Name</h3>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="obj_name" name="obj_name" required>
                    </div>
                </div>


                <div class="row"><div class="col-md-12"><br><br><br><br></div></div>


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center text-capitalize">Tags</h3>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="tags" name="tags" placeholder="maximum 5 tags separated by comma with no space" onblur="check_tags()" required>
                    </div>
                </div>


                <div class="row"><div class="col-md-12"><br><br><br><br></div></div>


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center text-capitalize">Question 1</h3>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="q1" name="q1" required>
                    </div>
                </div>


                <div class="row"><div class="col-md-12"><br><br><br><br></div></div>


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center text-capitalize">Answer 1</h3>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="a1" name="a1" placeholder="check spelling" required>
                    </div>
                </div>

                <div class="row"><div class="col-md-12"><br><br><br><br></div></div>


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center text-capitalize">Question 2</h3>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="q2" name="q2" required>
                    </div>
                </div>


                <div class="row"><div class="col-md-12"><br><br><br><br></div></div>


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center text-capitalize">Answer 2</h3>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="a2" name="a2" placeholder="check spelling" required>
                    </div>
                </div>

                <div class="row"><div class="col-md-12"><br><br><br><br></div></div>

                <center><button type="submit" class="btn btn-success" id="submit_obj_details" name="submit_obj_details">Submit</button></center>
            </form>
        </div>
    </body>
</html>