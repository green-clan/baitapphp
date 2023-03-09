<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
// tính tổng các phần tử trong mảng
$total = array_sum($arrs);

// hiển thị chuỗi tổng các phần tử
echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $total;
// tính tích các phần tử trong mảng
$product = array_product($arrs);

// hiển thị chuỗi tích các phần tử
echo "<br>Tích các phần tử = " . implode(" * ", $arrs) . " = " . $product;
// tính hiệu các phần tử trong mảng

$diff = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $diff -= $arrs[$i];
};
// hiển thị chuỗi hiệu các phần tử
echo "<br>Hiêu các phần tử = " . implode(" - ", $arrs) . " = " . $diff;
// tính Thương các phần tử trong mảng
$quotient = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    if ($arrs[$i] == 0) {
        $quotient = 0;
    }
    $quotient /= $arrs[$i];
};
// hiển thị chuỗi thương các phần tử
echo "<br>Thương các phần tử = " . implode(" / ", $arrs) . " = " . $quotient;
$arr1 = [2, 5, 2];
// tính tổng chuỗi arr1
$tong = array_sum($arr1);
// hiển thị kết quả tổng
echo "<br>Tổng các phần tử = " . implode(" + ", $arr1) . " = " . $tong;
// tích chuỗi arr1
$tich = array_product($arr1);
// hiển thị kết quả tích
echo "<br>Tích các Phần tử = " . implode(" * ", $arr1) . " = " . $tich;
// hiệu chuỗi arr1
$hieu = $arr1[0];
for ($i = 1; $i < count($arr1); $i++) {
    $hieu -= $arr1[$i];
}
// hiển thị kết quả hiệu
echo "<br>Hiệu các phần tử = " . implode(" - ", $arr1) . " = " . $hieu;
// tính thương chuỗi arr1
$thuong = $arr1[0];
for ($i = 1; $i < count($arr1); $i++) {
    $thuong /= $arr1[$i];
}
// hiển thị Kết quả thương 
echo "<br>Hiệu các phần tử = " . implode(" / ", $arr1) . " = " . $thuong;
$arr2 = [22, 5, -1];
// định nghĩa hàm tính hiệu mảng
function array_difference($arr)
{
    $difference = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $difference -= $arr[$i];
    }
    return $difference;
}
// tính hiệu chuỗi 
$difference3 = array_difference($arr2);
// hiển thị kết quả hiệu arr3
echo "<br>Hiệu các phần tử = " . implode(" - ", $arr2) . " = " . $difference3;
// tính tổng chuỗi arr2 
$total3 = array_sum($arr2);
// hiển thị tổng chuỗi arr2 
echo "<br>Tổng các phần tử = " . implode(" + ", $arr2) .  " = " . $total3;
// tính tích của mảng arr2 
$product2 = array_product($arr2);
// hiển thị kết quả tích arr2
echo "<br>Tích các phần tử = " . implode(" * ", $arr2) . " = " . $product2;
// Định nghĩa hàm tính hiệu mảng
function array_quotient($arr)
{
    $quotient = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $quotient /= $arr[$i];
    }
    return $quotient;
}
// tính hiêu của mảng arr2
$quotient3 = array_quotient($arr2);
// hiển thị hiệu mảng arr2
echo "<br>Thương của các phần tử = " . implode(" / ", $arr2) . " = " . $quotient3;

$arr3 = [1, 5, -1];
// tính tổng arr3
$total4 = array_sum($arr3);
// hiển thị kết quả tổng arr4 
echo "<br>Tổng các phần tử = " . implode(" + ", $arr3) . " = " . $total4;
// tính hiệu arr3
$difference4 = array_difference($arr3);
// hiển thị hiệu arr3
echo "<br>Hiệu các phần tử = " . implode(" - ", $arr3) . " = " . $difference4;
// tính tích của mảng arr3 
$product4 = array_product($arr3);
// hiển thị kết quả tích arr2
echo "<br>Tích các phần tử = " . implode(" * ", $arr3) . " = " . $product4;
// tính hiêu của mảng arr3
$quotient4 = array_quotient($arr3);
// hiển thị hiệu mảng arr3
echo "<br>Thương của các phần tử = " . implode(" / ", $arr3) . " = " . $quotient4;
$arrs2 = ['đỏ', 'xanh', 'cam', 'trắng'];
// Cho biết đây là mảng loại nào đây là mảng tuần tự có key là các số nguyên thường bắt đầu từ 0
// Viết code để hiển thị chuỗi như sau, với các màu lấy từng mảng trên:
echo "Màu $arrs2[0] là màu yêu thích của Anh, $arrs2[3] là màu yêu thích của Sơn, $arrs2[2] là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu $arrs2[3]";

$arrs3 = ['PHP', 'HTML', 'CSS', 'JS'];
$arrs4 = array("Italy" => "Rome", 
                "Luxembourg" => "Luxembourg", 
                "Belgium" => "Brussels", 
                "Denmark" => "Copenhagen", 
                "Finland" => "Helsinki", 
                "France" => "Paris", 
                "Slovakia" => "Bratislava", 
                "Slovenia" => "Ljubljana", 
                "Germany" => "Berlin", 
                "Greece" => "Athens", 
                "Ireland" => "Dublin", 
                "Netherlands" => "Amsterdam", 
                "Portugal" => "Lisbon", 
                "Spain" => "Madrid", 
                "Sweden" => "Stockholm", 
                "United Kingdom" => "London", 
                "Cyprus" => "Nicosia", 
                "Lithuania" => "Vilnius", 
                "Czech Republic" => "Prague", 
                "Estonia" => "Tallin", 
                "Hungary" => "Budapest", 
                "Latvia" => "Riga", 
                "Malta" => "Valetta", 
                "Austria" => "Vienna", 
                "Poland" => "Warsaw");
foreach ($arrs4 AS $key => $value) {
    echo "<br>Thủ đô của $key là $value";
};
$a = [
    'a' => [
      'b' => 0,
      'c' => 1
    ],
    'b' => [
      'e' => 2,
      'o' => [
        'b' => 3
      ]
    ]
  ];
echo "<br>";

// Hãy lấy giá trị = 3 mà có key là b từ mảng trên
echo $a['b']['o']['b'];  
// •	Hãy lấy giá trị = 1 mà có key là c từ mảng trên
echo "<br>" . $a['a']['c'];
// •	Hãy lấy thông tin của phần tử có key là a
echo "<br>";
print_r($a['a']);
// 6.	Cho 2 mảng như sau:
$keys = array(
  "field1"=>"first",
  "field2"=>"second",
  "field3"=>"third"
);
$values = array(
  "field1value"=>"dinosaur",
  "field2value"=>"pig",
  "field3value"=>"platypus"
);
// Hãy tạo mảng thứ 3 từ 2 mảng trên, mảng kết quả là mảng sau:
// $keysAndValues = array(
//    "first"=>"dinosaur",
//    "second"=>"pig",
//    "third"=>"platypus"
// );
$keysAndValues = array();
foreach ($keys AS $key => $value) {
    $fieldkeys = $key . 'value';
    $keysAndValues[$value] = $values[$fieldkeys];
}
print_r($keysAndValues);
// 7.	Tìm và hiển thị tất cả các số từ 100 đến 200 và chia hết cho 5 trong mảng sau:
$array7 = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100,  -125, 0];
$result = [];
for ($i = 0 ; $i < count($array7); $i++) {
    if ($array7[$i] >= 100 && $array7[$i] <= 200) {
        if ($array7[$i] % 5 == 0){
            $result[] = $array7[$i];
        }
    }
}
foreach ($result as $value) {
    echo "<br>$value";
}
// 8.	Tìm chuỗi có độ dài lớn nhất, nhỏ nhất và độ dài tương ứng đó từ mảng sau:
$array8 = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
$min_length = $array8[0];
$max_length = $array8[0];
foreach ($array8 AS $value) {
    if (strlen($min_length) > strlen($value)) {
        $min_length = $value;
    }
    if (strlen($max_length) < strlen($value)) {
        $max_length = $value;
    }
}
echo "<br>Chuỗi có độ dài lớn nhất: $max_length" . ", độ dài = " . strlen($max_length);
echo "<br>Chuỗi có độ dài nhỏ nhất: $min_length" . ", độ dài = " . strlen($min_length);
// 9.	Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự thường. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra
// VD: mảng 1 có các phần tử  [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘a’, ‘b’, ‘abc’]
$arrs9_1 = ['1', 'B', 'C', 'E'];
echo "<br>";
print_r($arrs9_1);

$new_arrs9_1 = array_map('strtolower', $arrs9_1);
echo "<br>";
print_r($new_arrs9_1);

$arrs9_2 = ['a', 0, null, false];
$new_arrs9_2 = array_map(function($item){
    return $item === null ? 'null' : ($item === false ? 'false' : strtolower($item)); 
}, $arrs9_2);
echo "<br>";
print_r($new_arrs9_2);
// viết hoa
$new_arrs9_3 = array_map(function($item){
    return $item === null ? 'null' : ($item === false ? 'false' : strtoupper($item)); 
}, $arrs9_2);
echo "<br>";
print_r($new_arrs9_3);
// 11.	Cho mảng  sau
$array_11 = array(1, 2, 3, 4, 5);
// Thực hiện xóa phần tử thứ 3 trong mảng trên, sau khi xóa hãy đảm bảo key của mảng là tuần tự
unset($array_11[2]);
echo "<br>";
print_r($array_11);
// 12.	Cho mảng sau:
$numbers = [
  'key1' => 12,   
  'key2' => 30,   
  'key3' => 4,   
  'key4' => -123,   
  'key5' => 1234,   
  'key6' => -12565,   
];
// •	Lấy ra phần tử đầu tiên, phần tử cuối cùng trong mảng trên
// •	Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng trên
// •	Sắp xếp mảng theo chiều tăng, giảm các giá trị
// •	Sắp xếp mảng theo chiều tăng, giảm các key
// Lấy ra phần tử đầu tiên và cuối cùng của mảng
$first_element = reset($numbers);
$last_element = end($numbers);

echo "Phần tử đầu tiên: " . $first_element . "<br>";
echo "Phần tử cuối cùng: " . $last_element . "<br>";

// Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng
$min = min($numbers);
$max = max($numbers);
$sum = array_sum($numbers);
echo "<br>";
echo "Số nhỏ nhất: " . $min . "<br>";
echo "Số lớn nhất: " . $max . "<br>";
echo "Tổng giá trị: " . $sum . "<br>";
echo "<br>";
// Sắp xếp mảng theo chiều tăng và giảm giá trị
sort($numbers);
print_r($numbers);
echo "<br>";
rsort($numbers);
print_r($numbers);
echo "<br>";
// Sắp xếp mảng theo chiều tăng và giảm key
ksort($numbers);
print_r($numbers);
echo "<br>";
krsort($numbers);
print_r($numbers);
echo "<br>";
// 13.	Cho mảng sau:
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
// •	Tính toán giá trị trung bình của mảng trên
// •	Liệt kê các số có giá trị lớn hơn giá trị trung bình đó 
// •	Liệt kê các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình đó 
echo "<br>";
$average = array_sum($numbers) / count($numbers);
    $result_13_biggeer = 0;
echo "Liệt kê các số có giá trị lớn hơn giá trị trung bình đó : ";
foreach ($numbers AS $value) {
    if ($value > $average) {
        echo   $value . " ";
        
    }
 
}
echo "<br>";
echo "Liệt kê các số có giá trị nhỏ hơn giá trị trung bình đó : ";
foreach ($numbers AS $value) {
    if ($value < $average) {
        echo   $value . " ";
        
    }
 
}
// 14.	Gộp 2 mảng sau dựa theo key của từng mảng
$array1 = [
  [77, 87],
  [23, 45]
];
$array2 = [
      'giá trị 1', 'giá trị 2'
];
// Kết quả mong đợi:
// [
//   0 => [
//       'giá trị 1',
//       77,
//       87
//   ],
//   1 => [
//       'giá trị 2',
//       23,
//       45,
//   ]
// ]
echo "<br>";
$array3 = [];
foreach ($array1 AS $key => $value) {
    
    $array3[] = array_merge([$array2[$key]], $value);
}
print_r($array3);






?>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>
            Tên Khoá Học
        </th>
    </tr>
    <?php foreach ($arrs3 as $language) : ?>
        <tr>
            <td><?php echo $language; ?></td>
        </tr>
    <?php endforeach; ?>
</table>