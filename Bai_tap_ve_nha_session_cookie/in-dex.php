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

            header('location: loginsucess.php');
        }
    }
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
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>