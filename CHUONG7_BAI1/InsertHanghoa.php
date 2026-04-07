<?php

/* gọi file kết nối */
include("connection.php");

/* nhận dữ liệu từ form */
$MaHH   = $_POST["mahang"];
$TenHH  = $_POST["tenhang"];
$Mansx = $_POST["mansx"];
$SoLuong= $_POST["namsx"];
$Giaban = $_POST["gia"];

/* câu lệnh thêm */
$sql = "INSERT INTO HANGHOA(mahang, tenhang, mansx, namsx, gia)
        VALUES('$MaHH','$TenHH','$Mansx','$SoLuong','$Giaban')";

/* thực thi */
if ($conn->query($sql) === TRUE) {
    echo "Thêm hàng hóa thành công!";
} else {
    echo "Lỗi: " . $conn->error;
}

/* đóng kết nối */
$conn->close();
?>