<!doctype html>
<html>
<head>
<title></title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="bootstrap/dist/js/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
<style>
    body {
        background-color: dimgray;
    }
</style>
<!-- navbar start -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Double Submit Cookies Patterns</a>
        </div>
        <ul class="nav navbar-nav">

            <?php
            if(!isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='user.php'></t>User Profile</t></a></li>";
            }
            ?>

        </ul>
        <ul class="nav navbar-nav navbar-right">

            <?php
            if(!isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='signin.php'> Sign In </a></li>";
            }
            ?>

            <?php
            if(isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='signout.php'> Sign Out </a></li>";
            }
            ?>

        </ul>
    </div>
</nav>
<!-- navbar end -->

<div class="container">
    <div class="row" align="center" style="padding-top: 100px;">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">User's Name</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">


                            <?php
                            if(isset($_COOKIE['session_cookie']))
                            {
                                session_start();
                                if ($_POST['csrf_Token'] == $_COOKIE['csrf_token'])
                                {
                                    $fname=$_POST['name'];
                                    echo "<div class='alert alert-primary' role='alert'>".$fname."</div>";
                                }
                                else
                                {
                                    echo "<script>alert('WARNING :: CSRF Found !!!')</script>";
                                }
                            }
                            ?>


                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>