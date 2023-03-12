<?php 
// print_r($_POST);
$error = '';
$result = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];
    $gender = $_POST['gender'];
    if (empty($name)) {
        $error = 'tên không được để chống';
    } elseif (empty($email)) {
        $error = 'email không được để chống';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email không đúng định dạng';
    } elseif (empty($date)) {
        $error = 'time không được để trống';
    } elseif (empty($gender)) {
        $error = 'hãy xác định giới tính';
    } elseif (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $date)) {
        $error = 'thời gian không đúng định dạng';
    }
    if (empty($error)) {
        $result =  "<br>Name: $name 
                    <br>Email: $email
                    <br>Specific Time: $date
                    <br>Class details: $notes
                    <br>Email: $gender";
                    
       
    }
    

}

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>bài 1</title>
</head>
<body>
    <form action="" method="post">
        <h1>
            Tutorials Point Absolute classes resgistration
        </h1>
        <table>
            <tr>
                <td>
                    name:
                </td>
                <td>
                    <input type="text" name="name" id="">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id=""></td>
            </tr>
            <tr>
                <td>Specific Time:</td>
                <td><input type="text" name="date" id="" placeholder="mm/dd/yyyy"></td>
            </tr>
            <tr>
                <td>Class details:</td>
                <td><textarea name="notes" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" id="" value="Female">Female<input type="radio" name="gender" id="" value="male">male</td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Show info">
    </form>
    <h3 style="color: red;" id=""><?php echo $error ?></h3>
    <h3 style="color: green;" id=""><?php echo "your Given details are as $result" ?></h3>
</body>
</html>