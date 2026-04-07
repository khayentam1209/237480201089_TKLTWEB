<?php
    include 'Connection.php';

    $makh = $_POST['makh'];
    $tenkh = $_POST['tenkh'];
    $namsinh = $_POST['namsinh'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];

    $sql = "UPDATE khachhang SET tenkh='$tenkh', namsinh='$namsinh', dienthoai='$dienthoai', diachi='$diachi' WHERE makh='$makh'";

    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật thông tin khách hàng thành công!";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>