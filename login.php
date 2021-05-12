<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <script src="https://kit.fontawesome.com/0b72508749.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="logo text-center ">
    <img src="assets/images/smith-logo.png" alt="smith-logo" class="logo__img">
</div>
<h6 class="h_title text-uppercase">Login With Smith</h6>
<div class="container">
    <main>
        <form action="loginResponse.php" method="POST">
            <div class="form-group ">
                <label for="l_email">Email:</label>
                <input type="text" id="l_email" name="l_email" class="form-control" placeholder="Type Your Email"
                       required>
            </div
            <div class="form-group ">
                <label for="l_password">password:</label>
                <input type="password" id="l_password" name="l_password" class="form-control"
                       placeholder="Type Your password" required>
            </div>

        </form>
    </main>
</div>
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>