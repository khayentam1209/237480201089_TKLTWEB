<?php
function timTuDaiNhat($str) {
    $mang = explode(" ", $str);
    $max_word = "";
    foreach ($mang as $tu) {
        if (mb_strlen($tu) > mb_strlen($max_word)) {
            $max_word = $tu;
        }
    }
    return $max_word;
}

if (isset($_POST['tim'])) {
    $s = $_POST['s18'];
    $tu = timTuDaiNhat($s);
    echo "Nhập: s = \"$s\" <br>";
    echo "Xuất: \"$tu\" " . mb_strlen($tu) . " kí tự.";
}
?>
<form method="post">
    Nhập chuỗi: <input type="text" name="s18" value="TRUONG DAI HOC BAC LIEU">
    <input type="submit" name="tim" value="Tìm từ dài nhất">
</form>