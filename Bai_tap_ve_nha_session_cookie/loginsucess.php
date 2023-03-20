<?php session_start();
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    echo $_SESSION['password'];
echo '<form action="logout.php" method="post">';
echo  '<input type="submit" value="logout" name="logout">';
echo '</form>';

}
if(!isset($_SESSION['username'])) {
    
    echo "<script>alert('Cần đăng nhập để truy cập trang này'); window.location.href='in-dex.php';</script>";

}
