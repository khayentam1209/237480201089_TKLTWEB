<?php
// Các hàm xử lý ma trận
function timMaxMT($mt) {
    $max = $mt[0][0];
    foreach($mt as $hang) { if(max($hang) > $max) $max = max($hang); }
    return $max;
}
function timMinMT($mt) {
    $min = $mt[0][0];
    foreach($mt as $hang) { if(min($hang) < $min) $min = min($hang); }
    return $min;
}
function tinhTongMT($mt) {
    $tong = 0;
    foreach($mt as $hang) { $tong += array_sum($hang); }
    return $tong;
}

// Giả sử ma trận được nhập hoặc khởi tạo sẵn như trong ảnh
$ma_tran = [
    [1.1, 2.3, 3.1, 4.0, 5.0],
    [6.2, 7.7, 8.8, 9.5, 1.2],
    [4.6, 1.9, 3.6, 8.9, 1.5],
    [1.6, 1.7, 1.8, 1.9, 2.0]
];

$kq_mt = "";
if (isset($_POST['run_mt'])) {
    $chon = $_POST['menu_mt'];
    switch ($chon) {
        case 'a': $kq_mt = "Số lớn nhất: " . timMaxMT($ma_tran); break;
        case 'b': $kq_mt = "Số nhỏ nhất: " . timMinMT($ma_tran); break;
        case 'c': $kq_mt = "Tổng các số: " . tinhTongMT($ma_tran); break;
        case 'd': // Hiển thị dạng bảng toán học
            $kq_mt = "<table border='1' cellpadding='10' style='border-collapse:collapse;'>";
            foreach($ma_tran as $hang) {
                $kq_mt .= "<tr>";
                foreach($hang as $so) { $kq_mt .= "<td>$so</td>"; }
                $kq_mt .= "</tr>";
            }
            $kq_mt .= "</table>";
            break;
    }
}
?>

<form method="post">
    Chọn công việc ma trận: 
    <select name="menu_mt">
        <option value="a">a) Tìm số lớn nhất</option>
        <option value="b">b) Tìm số nhỏ nhất</option>
        <option value="c">c) Tính tổng các số</option>
        <option value="d">d) In ma trận dạng bảng</option>
    </select>
    <input type="submit" name="run_mt" value="Thực hiện">
</form>
<div><?php echo $kq_mt; ?></div>