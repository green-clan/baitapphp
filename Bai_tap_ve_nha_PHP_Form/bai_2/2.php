<?php
print_r($_GET);
$error = '';
$result = '';
if(isset($_GET['Submit'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $type = $_GET['type'];
    $displayname = $_GET['displayname'];
    $addres = $_GET['addres'];
    $email = $_GET['email'];
    // $gender = $_GET['gender'];
    if (!$username) {
        $error = 'không được để trống tên đăng nhập';
    } elseif (!$password) {
        $error = 'không dược để trống password';
    } elseif ($type == 'default') {
        $error = 'hãy chọn user type';
    } elseif (!$displayname) {
        $error = 'hãy nhập tên hiển thị';
    } elseif (!$addres) {
        $error = 'hãy nhập địa chỉ';
    } elseif (!$email) {
        $error = 'hãy nhập email';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email phải đúng đinh dạng';
    } elseif (!isset($_GET['gender'])) {
        $error = 'phải chọn giới tính';
    } elseif (!isset($_GET['accept'])) {
        $error = 'bạn chưa đồng ý điều kiện và điều khoản';
    }
    if (isset($_GET['gender'])) {
        $gender = $_GET['gender'];
    }
    if (isset($_GET['accept'])) {
        $accept = $_GET['accept'];
    }
    if (!$error) {
        $result = "<br>Username: $username
                    <br>Password: $password
                    <br>User type: $type
                    <br>Display name: $displayname
                    <br>Address: $addres
                    <br>Email: $email
                    <br>Gender: $gender
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/2.css">

    <title>bai 2</title>
</head>
<body>
    <form action="" method="get">
        <div class="header_form text-center">
            <h3>Registration Form</h3>
        </div>
        <div class="main" >
            <table  cellspacing="2" >
                <tr>
                    <td>Uername</td>
                    <td><input type="text" name="username" id="" value="<?php echo isset($_GET['username']) ? $username : '' ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="" value="<?php echo isset($_GET['password']) ? $password : '' ?>"></td>
                </tr>
                <tr>
                    <td>User Type</td>
                    <td>
                        <select name="type" id="" >
                            <option value="default">--Select--</option>
                            <option value="person" <?php if (isset($_GET['type'])) {echo $type == 'person' ? 'selected' : ''; } ?>>--person--</option>
                            <option value="company" <?php if (isset($_GET['type'])) {echo $type == 'company' ? 'selected' : ''; } ?>>--conpanmy--</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Display Name</td>
                    <td><input type="text" name="displayname" id="" value="<?php echo isset($_GET['displayname']) ? $displayname : '' ?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="addres" id="" cols="30" rows="10" ><?php echo isset($_GET['addres']) ? $addres : '' ?></textarea></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="" value="<?php echo isset($_GET['email']) ? $email : '' ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" id="" value="Male" <?php if (isset($_GET['gender']) ) {echo $gender == 'Male' ? 'checked' : ''; };?>>Male
                        <input type="radio" name="gender" id="" value="Female" <?php if (isset($_GET['gender'])) {echo $gender == 'Female' ? 'checked' : ''; };?>>Female
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="accept" value="true" id="" <?php if (isset($_GET['accept'])) {echo $accept == 'true' ? 'checked' : '';} ?>> I accept Terms and Conditions</td>
                </tr>
            </table>
        </div>
        <div class="footer_form text-center">
            <input type="submit" value="Submit" name="Submit">
        </div>
    </form>
    <h3 style="color: red;"><?php echo $error; ?></h3>
    <h3 style="color: green;"><?php echo $result; ?></h3>
</body>
</html>