<?php
function USCLN($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

if(isset($_POST['tinh'])) {
    $s1 = $_POST['so1'];
    $s2 = $_POST['so2'];
    $uscln = USCLN($s1, $s2);
    $bscnn = ($s1 * $s2) / $uscln;
    $kq = ($_POST['tinh'] == 'USCLN') ? $uscln : $bscnn;
}
?>
<form method="post">
    Số 1: <input type="number" name="so1" value="<?= $s1??'' ?>"><br>
    Số 2: <input type="number" name="so2" value="<?= $s2??'' ?>"><br>
    Kết quả: <input type="text" readonly value="<?= $kq??'' ?>"><br>
    <input type="submit" name="tinh" value="USCLN">
    <input type="submit" name="tinh" value="BSCNN">
</form>