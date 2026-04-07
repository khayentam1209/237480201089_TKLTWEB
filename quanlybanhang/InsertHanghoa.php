<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")// Kiểm tra nếu form đã được submit
     {

    $mahang = $_POST['mahang'] ?? '';
    $tenhang = $_POST['tenhang'] ?? '';
    $mansx = $_POST['mansx'] ?? '';
    $namsx = $_POST['namsx'] ?? '';
    $gia = $_POST['gia'] ?? '';
    // kết nối database đã được thiết lập trong Connection.php
    $sql = "INSERT INTO HANGHOA (mahang, tenhang, mansx, namsx, gia) 
            VALUES ('$mahang', '$tenhang', '$mansx', '$namsx', '$gia')";

    if (mysqli_query($conn, $sql)) 
    {
        echo "Thêm hàng hóa thành công!";
    } else 
    {
        echo "Lỗi: " . mysqli_error($conn);
    }

    mysqli_close($conn);

} else {
    echo "Vui lòng nhập dữ liệu từ form!";
}
?>