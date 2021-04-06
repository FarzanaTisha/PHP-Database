<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
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
    <title>Home Page</title>
</head>
<body>

<div class="container">
    <h2 class="text-center">Welcome <?php if (!empty($_SESSION['username'])) $_SESSION['username'] ?></h2>
    <a href="logout.php" class="text-center">Logout</a>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
