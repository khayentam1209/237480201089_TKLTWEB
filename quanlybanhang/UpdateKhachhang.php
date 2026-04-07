<?php 
include 'Connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")// Kiểm tra nếu form đã được submit
     {

    $makh = $_POST['makh'] ?? '';
    $tenkh = $_POST['tenkh'] ?? '';
    $diachi = $_POST['diachi'] ?? '';
    $dienthoai = $_POST['dienthoai'] ?? '';
    $namsinh = $_POST['namsinh'] ?? '';
    // kết nối database đã được thiết lập trong Connection.php
    $sql = "UPDATE KHACHHANG SET tenkh='$tenkh', diachi='$diachi', dienthoai='$dienthoai', namsinh='$namsinh' WHERE makh='$makh'";

   
    if (mysqli_query($conn, $sql)) {
        // mysqli_affected_rows dùng để kiểm tra xem có dòng nào được sửa không
        if (mysqli_affected_rows($conn) > 0) {
            echo "<h3 style='color: blue;'>Cập nhật thành công khách hàng: $ma</h3>";
        } else {
            echo "<h3 style='color: orange;'>Không tìm thấy khách hàng có mã: $ma</h3>";
        }
    } else {
        echo "<h3 style='color: red;'>Lỗi: " . mysqli_error($conn) . "</h3>";
    }
}

    mysqli_close($conn);
?>