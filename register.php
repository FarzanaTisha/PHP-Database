<?php

$conn = new mysqli("localhost", "root", "", "login_registration_php");

$name = $_POST['user'];
$pass = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE name = '$name'";

$result = $conn->query($sql);

$num = mysqli_num_rows($result);

if (empty($name) || empty($pass)) {
    $message = "The fields can not be empty!";
    header("location:registration.php?message=".$message);
}
else {
    if ($num == 1) {
        $message = "Username already taken!";
        header("location:registration.php?message=".$message);
    }
    else {
        $reg = "INSERT INTO users (name, password) VALUES ('$name', '$pass')";
        $conn->query($reg);
        $msg = "Registration successful!";
        header("location:login.php?success=".$msg);
    }
}