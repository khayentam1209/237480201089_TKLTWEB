<?php
$host = "localhost";
$username = "root"; // Mặc định của XAMPP là root
$password = "";     // Mặc định của XAMPP là để trống
$dbname = "quanlybanhang";

// Tạo kết nối
$conn = mysqli_connect($host, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
// Thiết lập font chữ tiếng Việt
mysqli_set_charset($conn, "utf8");
?>