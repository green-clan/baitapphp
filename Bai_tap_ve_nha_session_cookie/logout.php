<?php
session_start();
if (isset($_POST['logout'])) {
    $_SESSION['logout'] = $_POST['logout'];
}
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
}

if (isset($_COOKIE['username'])) {
    setcookie("username", "nvmanh", time() - 1);
    setcookie("password", "123456", time() - 1);
}
header("location: in-dex.php");
