<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
// Khai báo mảng
$arr = [5, 2, 9, 1, 7, 6];

// a) Xuất mảng
echo "Mảng ban đầu: ";
foreach($arr as $x){
    echo $x . " ";
}
echo "<br><br>";

// b) Tính tổng
$sum = 0;
foreach($arr as $x){
    $sum += $x;
}
echo "Tổng các phần tử: $sum <br>";

// c) Tìm max, min
$max = $arr[0];
$min = $arr[0];

foreach($arr as $x){
    if($x > $max) $max = $x;
    if($x < $min) $min = $x;
}

echo "Số lớn nhất: $max <br>";
echo "Số nhỏ nhất: $min <br>";

// d) Đảo mảng
echo "Mảng sau khi đảo: ";
$reverse = array_reverse($arr);
foreach($reverse as $x){
    echo $x . " ";
}
?>

</body>
</html>