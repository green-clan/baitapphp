<?php
// Kiểm tra xem form đã được submit hay chưa
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = array();
    $result = '';
  // Lấy giá trị từ form
  $email = $_POST['email'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  if (!isset($_POST['courses'])){
      $errors[] = 'chưa chọn khoá học';
    } else {
        $courses = $_POST['courses'];
        foreach ($courses AS $job) {
            switch ($job) {
                case 0: $result .= "Dev ";break;
                case 1: $result .= "Tester ";break;
                case 2: $result .= "s ";
                case 3: $result .= "d ";
                case 4: $result .= "f ";
                case 5: $result .= "g ";
            }
        }
        
  }
  if (!isset($_POST['concentration'])){
      $errors[] = 'chưa chọn lĩnh vực';
    } else {
        
        $concentration = $_POST['concentration'];
  }
  $comments = $_POST['comments'];

  // Validate các điều kiện

  if(empty($email)) {
    $errors[] = "Username không được để trống";
  }

  if(empty($password)) {
    $errors[] = "Password không được để trống";
  } elseif(strlen($password) < 8) {
    $errors[] = "Password phải có độ dài tối thiểu 8 ký tự";
  }

  // Nếu không có lỗi, hiển thị thông tin đã nhập
  if(empty($errors)) {
    echo "Đăng ký thành công!<br>";
    echo "Thông tin của bạn:<br>";
    echo "Email: $email<br>";
    echo "Select academy: $level<br>";
    echo "Token: $result<br>";
    echo "Concentration: $concentration<br>";
    echo "Message: $comments<br>";
  } else {
    // Nếu có lỗi, hiển thị thông báo lỗi
    foreach($errors as $error) {
      echo "<div style='color:red'>$error</div>";
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
    <link rel="stylesheet" href="css/3.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="form">
        <table>
            <tr>
                <td>Enter e-mail address:</td>
                <td><input type="text" name="email" id=""></td>
            </tr>
            <tr>
                <td>Enter password:</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td>Select academic level:</td>
                <td>
                    <select name="level" id="">
                        <option value="0">Freshman</option>
                        <option value="1">Junior</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Identify courses taken:</td>
                <td>
                    <input type="checkbox" value="0" name ="courses[]">CSCI 1710
                    <br> 
                    <input type="checkbox" value="1" name ="courses[]">CSCI 1800
                    <br> 
                    <input type="checkbox" value="2" name ="courses[]">CSCI 1710
                    <br> 
                    <input type="checkbox" value="3" name ="courses[]">CSCI 2800
                    <br> 
                    <input type="checkbox" value="4" name ="courses[]">CSCI 2150
                    <br> 
                    <input type="checkbox" value="5" name ="courses[]">CSCI 2910
                    <br> 
                </td>
            </tr>
            <tr>
                <td>Select concentration:</td>
                <td>
                    <input type="radio" name="concentration" id="" value="0"> Computer Science (CS) <br>
                    <input type="radio" name="concentration" id="" value="1"> Infotmation Science (IS) <br>
                    <input type="radio" name="concentration" id="" value="2"> Infomation Technology <br>
                </td>
            </tr>
        </table>
        <textarea name="comments" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Submit Data">
    </form>

</body>
</html>