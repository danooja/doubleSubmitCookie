<!doctype html>
<html>
<head>

    <title>User Login</title>

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
<div class="container">
    <h2> User Login </h2>

    <div class=col-sm-8>

        <form action ='signin.php' method='POST' enctype='multipart/form-data'>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" Placeholder="User Email">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" Placeholder="Password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" id="submit" name="submit">Log In</button>
        </form>

    </div>

</div>

</body>
</html>


<?php
if(isset($_POST['submit'])) {
    user_login();
}
?>

<?php
function user_login()
{
    $user_email = 'admin@admin.com';
    $user_password = 'admin';
    $email_in = $_POST['email'];
    $password_in = $_POST['password'];
    if(($email_in == $user_email)&&($password_in == $user_password)) {
        session_set_cookie_params(300);
        session_start();
        session_regenerate_id();
        setcookie('session_cookie', session_id(), time() + 300, '/');
        $token = generate_token();
        setcookie('csrf_token', $token, time() + 300, '/', 'localhost',true);
        header("Location:user.php");
        exit;
    }else{
        echo "<script> alert('Invalid User.') </script>";
    }
}

/**
 * @return string
 */
function generate_token(){
    return sha1(base64_encode(openssl_random_pseudo_bytes(30)));
}
?>