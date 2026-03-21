<form method="post">
    Nhập chuỗi s: <input type="text" name="chuoi_s" value="Microsoft Windows"><br>
    Nhập ký tự ch: <input type="text" name="ky_tu_ch" maxlength="1" value="o"><br>
    <input type="submit" name="dem" value="Đếm">
</form>

<?php
if (isset($_POST['dem'])) {
    $s = $_POST['chuoi_s'];
    $ch = $_POST['ky_tu_ch'];
    
    // Sử dụng hàm có sẵn của PHP để đếm
    $so_lan = substr_count($s, $ch);
    
    echo "Ví dụ: s = \"$s\" -> ch = '$ch' -> số lần xuất hiện: $so_lan";
}
?>