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
                background: rgba(46, 51, 56, 0.2)!important;
            }

            hr{
                border-color: black;
                height: 2px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <button type="button" class="btn btn-primary" id="logout" style="margin-left: 90%; margin-top:15px;">Logout</button>
            <div class="jumbotron jumbo-trans">
                <h1 class="text-center">Search For Your Missing Item</h1>
                <form method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search_box" name="search_box" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button type="submit" id="search" name="search" class="btn btn-success">Find&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </form>
            </div>
            <hr>
            <div class="panel panel-trans">
                <div class="panel-body" id="search_contents">
                    <h4>Search Result Example</h4>
                    <!-- RESULT PAGE TEMPLATE STARTS HERE -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/lost.jpg" height="150px" width="150px"></span>
                                <a href="#">&nbsp;&nbsp;Content 1</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/lost.jpg" height="150px" width="150px"></span>
                                <a href="#">&nbsp;&nbsp;Content 2</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/lost.jpg" height="150px" width="150px"></span>
                                <a href="#">&nbsp;&nbsp;Content 3</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/lost.jpg" height="150px" width="150px"></span>
                                <a href="#">&nbsp;&nbsp;Content 4</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/lost.jpg" height="150px" width="150px"></span>
                                <a href="#">&nbsp;&nbsp;Content 5</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/lost.jpg" height="150px" width="150px"></span>
                                <a href="#">&nbsp;&nbsp;Content 6</a>
                            </div>
                        </div>
                    </div>
                    <!-- RESULT PAGE TEMPLATE ENDS HERE -->
                </div>
            </div>
        </div>
    </body>
</html>