<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $makh = $_POST['makh'] ?? '';

    $sql = "DELETE FROM KHACHHANG WHERE makh='$makh'";

    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) > 0) {
            echo "<h3 style='color: blue;'>Xóa khách hàng thành công!</h3>";
        } else {
            echo "<h3 style='color: orange;'>Không tìm thấy khách hàng có mã: $makh</h3>";
        }
    } else {
        echo "<h3 style='color: red;'>Lỗi: " . mysqli_error($conn) . "</h3>";
    }
}

mysqli_close($conn);
?>