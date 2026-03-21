<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<form method="post">
    Nhập mảng (cách nhau bằng dấu ,): 
    <input type="text" name="arr"><br><br>

    <button name="chon" value="a">Max</button>
    <button name="chon" value="b">Min</button>
    <button name="chon" value="c">Số chính phương</button>
    <button name="chon" value="d">Số chẵn</button>
    <button name="chon" value="e">Số lẻ</button>
    <button name="chon" value="f">Sắp xếp</button>
</form>

<?php

// ====== HÀM ======

function timMax($arr){
    $max = $arr[0];
    foreach($arr as $x){
        if($x > $max) $max = $x;
    }
    return $max;
}

function timMin($arr){
    $min = $arr[0];
    foreach($arr as $x){
        if($x < $min) $min = $x;
    }
    return $min;
}

function laChinhPhuong($n){
    return sqrt($n) == floor(sqrt($n));
}

function soChan($arr){
    $kq = [];
    foreach($arr as $x){
        if($x % 2 == 0) $kq[] = $x;
    }
    return $kq;
}

function soLe($arr){
    $kq = [];
    foreach($arr as $x){
        if($x % 2 != 0) $kq[] = $x;
    }
    return $kq;
}

// ====== XỬ LÝ ======

if(isset($_POST['arr'])){
    $arr = explode(",", $_POST['arr']);

    // chuyển sang số
    foreach($arr as &$x){
        $x = (int)$x;
    }

    echo "Mảng: ";
    print_r($arr);
    echo "<br><br>";

    switch($_POST['chon']){
        case "a":
            echo "Max: " . timMax($arr);
            break;

        case "b":
            echo "Min: " . timMin($arr);
            break;

        case "c":
            echo "Số chính phương: ";
            foreach($arr as $x){
                if(laChinhPhuong($x)) echo $x . " ";
            }
            break;

        case "d":
            echo "Số chẵn: ";
            print_r(soChan($arr));
            break;

        case "e":
            echo "Số lẻ: ";
            print_r(soLe($arr));
            break;

        case "f":
            sort($arr);
            echo "Mảng tăng dần: ";
            print_r($arr);
            break;
    }
}
?>

</body>
</html>