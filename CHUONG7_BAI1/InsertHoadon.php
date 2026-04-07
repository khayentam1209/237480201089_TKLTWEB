<?php

/* gọi file kết nối */
include("connection.php");

/* nhận dữ liệu từ form */
$MaHD = $_POST["mahd"];
$MaKH = $_POST["makh"];
$MaHH = $_POST["mahang"];
$SoLuong = $_POST["soluong"];
$ThanhTien = $_POST["thanhtien"];

/* câu lệnh thêm */
$sql = "INSERT INTO HOADON(mahd, makh, mahang, soluong, thanhtien)
        VALUES('$MaHD','$MaKH','$MaHH','$SoLuong','$ThanhTien')";

/* thực thi */
if ($conn->query($sql) === TRUE) {
    echo "Thêm hóa đơn thành công!";
} else {
    echo "Lỗi: " . $conn->error;
}

/* đóng kết nối */
$conn->close();
?>