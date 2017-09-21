<?php
    
    
    include_once('./php/constants.php');
    include_once('./php/db_util.php');
    session_start();
    $TITLE = Constants::$TITLE;
    if(!empty($_POST)){
        $util = new DBUtil();
        $usn = $_POST['usn'];
        $pwd = $_POST['pwd'];
        if( ( $key = $util->checkLogin($usn,$pwd)) != null )
            Component::showAlert("LogIn success");
        
            
    }
?>
    <!doctype html>
    <html>

    <head>
        <title>
            <?php echo $TITLE; ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>

    <body>



        <div class="jumbotron text-center light-pink-bg" id="jumbo">

            <nav class="navbar" id="mNav">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle nav-btn" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                        <a class="navbar-brand brand-title" href="#">
                            <?php echo $TITLE; ?>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#">LOGIN</a></li>
                            <li><a href="#">SIGN UP</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li>
                                <a href="#"> JOIN US</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
            <div class="title-decoration">
                <h1>
                    <?php echo $TITLE ?>
                </h1>
                <p>SHARE WITH THE WORLD</p>


                <!--modal -->
                <button class="btn start-btn" data-toggle="modal" data-target="#myModal">Connect Now</button>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #333;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h2 class="modal-title" id="myModalLabel">Sign Up</h2>

                            </div>
                            <div class="modal-body">


                                <form class="form-inline">
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email address:</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="pwd">Password:</label>
                                        <input type="password" class="form-control" id="pwd">
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Remember me</label>
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal End-->
            </div>
        </div>
        <div class="container data-img">
            <div class="row" style="background-color: #333;color: #fff;">
                <div class="col-md-5">
                    <div class="innovate-img"> </div>
                </div>
                <div class="col-md-1">

                </div>

                <div class="col-md-5">
                    <br />
                    <h1 style="letter-spacing:4px;">INNOVATE & PUBLISH</h1>
                    <hr />
                    <p style="padding: 10px; font-size: 20px; text-align:justify; font-weight: lighter;">Imagine, Innovate your thoughts and let the world know about it in a single click. Publish Your thoughts and let yourself be a light of the world.</p>

                </div>

            </div>
            <hr />
            <div class="row">
                <div class="col-md-5">

                    <br />
                    <h1 style="letter-spacing:7px; text-align:center;">LOGIN</h1>
                    <hr />
                    <p style="padding: 10px; font-size: 20px; text-align:justify; font-weight: lighter;">Login to your account to access the resources. Enjoy your journey with us and with the people over the world
                    </p>

                </div>
                <div class="col-md-1">

                </div>

                <div id="login" class="col-md-5">
                    <br />
                    <h3>Credentials here</h3><br />
                    <form id="myForm">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">@</span>
                            <input type="text" class="form-control" name="usn" id="username" placeholder="Username" aria-describedby="basic-addon1">

                        </div><br />
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1" style="font-size: 20px;font-weight: bold;">*</span>
                            <input type="password" name="pwd" id="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                        </div><br />
                        <input type="button" id="loginBtn" value="Login" class="btn btn-default btn-success" style="width:100%;">
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-12 footer">
            <div class="container-fluid">
                <div class="col-md-5">
                    <h3>About Us</h3>
                    <p>Thank You for your love and support. This website is built with love for you all<br /><br /> Copyrights 2017 &copy; All rights reserved
                    </p>
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-5">
                    <h3>Designed & Developed By</h3>
                    <p>* Pavan Yekabote&nbsp;&nbsp; * Ajitesh Sakaray&nbsp;&nbsp;<br /> * Ajay Kamaley&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; * Ashok B&nbsp;&nbsp;</p>
                </div>
            </div>
        </div>

    </body>

    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

    </html>