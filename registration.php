<?php

session_start();
if (isset($_SESSION['username'])) {
    header('location:home.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>User Registration</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Register Here</h2>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="" class="form-la">Username</label>
                    <input type="text" class="form-control" name="user">
                </div>
                <div class="form-group">
                    <label for="" class="form-la">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <div><h6 class="text-danger lead"><?php if (isset($_GET['message'])) echo $_GET['message']?></h6></div>
                    <button type="submit" class="btn btn-primary">Register</button>
					<a href="login.php">Login</a>
                </div>
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
