<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")// Kiểm tra nếu form đã được submit
     {

    $mahd = $_POST['mahd'] ?? '';
    $makh = $_POST['makh'] ?? '';
    $mahang = $_POST['mahang'] ?? '';
    $soluong = $_POST['soluong'] ?? '';
    $thanhtien = $_POST['thanhtien'] ?? '';
    // kết nối database đã được thiết lập trong Connection.php
    $sql = "INSERT INTO HOADON (mahd, makh, mahang, soluong, thanhtien) 
            VALUES ('$mahd', '$makh', '$mahang', '$soluong', '$thanhtien')";

    if (mysqli_query($conn, $sql)) 
    {
        echo "Thêm hóa đơn thành công!";
    } else 
    {
        echo "Lỗi: " . mysqli_error($conn);
    }

    mysqli_close($conn);

} else {
    echo "Vui lòng nhập dữ liệu từ form!";
}
?>