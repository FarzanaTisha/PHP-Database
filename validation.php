<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login_registration_php");

$name = $_POST['user'];
//$pass = $_POST['password'];
$pass = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE name = '$name' && password = '$pass'";

$result = $conn->query($sql);

$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION['username'] = $name;
    header('location:home.php');
}
else {
    $message = "The fields can not be empty!";
    header('location:login.php? message='.$message);
}

