<?php
if(isset($_POST['btnSave'])) {
    $ten = $_POST['ten_kh'];
    $sdt = $_POST['sdt_kh'];
    
    // Lưu cookie trong 10 phút (10 * 60 = 600 giây)
    setcookie("ten_khach", $ten, time() + 600);
    setcookie("sdt_khach", $sdt, time() + 600);
    echo "Đã lưu thông tin khách hàng!";
}

// Hiển thị thông tin từ cookie nếu có
if(isset($_COOKIE['ten_khach'])) {
    echo "<h3>Thông tin khách hàng từ Cookie:</h3>";
    echo "Tên: " . $_COOKIE['ten_khach'] . "<br>";
    echo "SĐT: " . $_COOKIE['sdt_khach'];
}
?>
<form method="post">
    Tên khách hàng: <input type="text" name="ten_kh"><br>
    Số điện thoại: <input type="text" name="sdt_kh"><br>
    <input type="submit" name="btnSave" value="Lưu thông tin">
</form>