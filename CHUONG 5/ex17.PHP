<?php
function tachChuoi($str) {
    // Sử dụng dấu cách làm điểm tách
    return explode(" ", $str);
}

if (isset($_POST['tach'])) {
    $s = $_POST['s17'];
    $mang_tu = tachChuoi($s);
    
    echo "Ví dụ: s = \"$s\" &rarr; ";
    foreach ($mang_tu as $key => $val) {
        echo "a[" . ($key + 1) . "] = \"$val\"; ";
    }
}
?>
<form method="post">
    Nhập chuỗi cần tách: <input type="text" name="s17" value="tôi ăn cơm">
    <input type="submit" name="tach" value="Tách từ">
</form>