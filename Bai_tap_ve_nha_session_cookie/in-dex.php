<?php session_start();
echo "<pre>";
print_r($_POST);
print_r($_SESSION);
echo "</pre>";
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == 'nvmanh' && $_POST['password'] == 123456) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            if (isset($_POST['remenber'])) {
                setcookie("username", "nvmanh", time() + (60));
                setcookie("password", "123456", time() + (60));
            }
            header('location: loginsucess.php');
        }
    }
}

if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
    echo "<script>alert('Bạn đã đăng nhập rồi, cần logout tài khoản nếu muốn quay trở lại màn hình login form'); window.location.href='loginsucess.php';</script>";
}
if (isset($_SESSION['logout'])) {
    echo "<script defer>alert('Bạn đã đăng xuất khỏi hệ thống');</script>";
    unset($_SESSION['logout']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Username: <input type="text" name="username"> <br>
        Password: <input type="password" name="password" id=""> <br>
        checkbox <input type="checkbox" name="remenber" id="" value="1"> <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>