<?php session_start();

if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    echo $_SESSION['password'];
}
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {

    echo "<script>alert('Cần đăng nhập để truy cập trang này'); window.location.href='in-dex.php';</script>";
}
if (isset($_COOKIE['username']) && !isset($_SESSION['username'])) {
    echo $_COOKIE['username'];
    echo $_COOKIE['password'];
}
if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
    $username = '';
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
    } elseif (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
    echo "Đăng nhập thành công! <br> Chào mừng bạn, $username";

    echo '<form action="logout.php" method="post">';
    echo  '<input type="submit" value="logout" name="logout">';
    echo '</form>';
}
