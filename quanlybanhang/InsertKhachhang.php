<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $makh = $_POST['makh'] ?? '';
    $tenkh = $_POST['tenkh'] ?? '';
    $namsinh = $_POST['namsinh'] ?? '';
    $diachi = $_POST['diachi'] ?? '';
    $dienthoai = $_POST['dienthoai'] ?? '';

    $sql = "INSERT INTO KHACHHANG (makh, tenkh, namsinh, diachi, dienthoai) VALUES ('$makh', '$tenkh', '$namsinh', '$diachi', '$dienthoai')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3 style='color: blue;'>Thêm khách hàng thành công!</h3>";
    } else {
        echo "<h3 style='color: red;'>Lỗi: " . mysqli_error($conn) . "</h3>";
    }
}

mysqli_close($conn);
?>