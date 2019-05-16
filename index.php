<!doctype html>
<html>
<head>

    <title>Double Submit Cookies Patterns</title>

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

<!-- nav bar start -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Double Submit Cookies Patterns </a>
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
                echo "<li><a href='signin.php'> Successful </a></li>";
            }
            ?>


        </ul>
    </div>
</nav>
<!-- navbar end -->

</body>
<html>