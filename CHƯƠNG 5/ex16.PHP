<form method="post">
    Nhập chuỗi s: <input type="text" name="s16" value="ABCD">
    <input type="submit" name="dao" value="Đảo ngược">
</form>

<?php
if (isset($_POST['dao'])) {
    $s = $_POST['s16'];
    $chuoi_dao = strrev($s);
    echo "Ví dụ: s = \"$s\" &rarr; chuỗi đảo: \"$chuoi_dao\"";
}
?>