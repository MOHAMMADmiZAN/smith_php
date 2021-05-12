<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <script src="https://kit.fontawesome.com/0b72508749.js" crossorigin="anonymous"></script>
</head>
<body>
<main>
    <div class="container">

        <div class="logo text-center m-5">
            <img src="assets/images/smith-logo.png" alt="smith-logo">
            <h6 class="h_title">REGISTRATION DATA</h6>
        </div>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="c_password">Confirm Password</label>
                <input type="password" id="c_password" name="c_password" class="form-control">
            </div>
            <button class="submit" type="submit">SUBMIT</button>

        </form>
    </div>
</main>
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>