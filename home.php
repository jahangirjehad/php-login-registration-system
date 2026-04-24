<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>

<h1 align ="center">Welcome User</h2>

<p align ="center">You are logged in.</p>

<p align = "center">
    <a href="logout.php">Logout</a>
</p>

</body>
</html>