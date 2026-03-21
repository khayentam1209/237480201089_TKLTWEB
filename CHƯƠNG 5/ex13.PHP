<?php
// Khởi tạo mảng và các biến
$mang = [];
$ket_qua = "";

if (isset($_POST['submit'])) {
    // Lấy danh sách số từ input và chuyển thành mảng
    $input = $_POST['day_so'];
    $mang = explode(",", $input);
    $mang = array_map('trim', $mang); // Xóa khoảng trắng thừa
    $mang = array_map('intval', $mang); // Chuyển sang số nguyên
    
    $chon = $_POST['cong_viec'];

    // Các hàm xử lý (viết theo yêu cầu "Lưu ý: viết các hàm php để xử lý")
    
    // a. Tìm số lớn nhất
    function timMax($arr) { return max($arr); }

    // b. Tìm số nhỏ nhất
    function timMin($arr) { return min($arr); }

    // c. Tìm các số chính phương
    function timSoChinhPhuong($arr) {
        return array_filter($arr, function($n) {
            return $n >= 0 && sqrt($n) == floor(sqrt($n));
        });
    }

    // d. In các số chẵn
    function laySoChan($arr) {
        return array_filter($arr, function($n) { return $n % 2 == 0; });
    }

    // e. In các số lẻ
    function laySoLe($arr) {
        return array_filter($arr, function($n) { return $n % 2 != 0; });
    }

    // f. Sắp xếp tăng dần
    function sapXepTang($arr) {
        sort($arr);
        return $arr;
    }

    // Thực hiện công việc dựa trên menu
    switch ($chon) {
        case 'a': $ket_qua = "Số lớn nhất: " . timMax($mang); break;
        case 'b': $ket_qua = "Số nhỏ nhất: " . timMin($mang); break;
        case 'c': $ket_qua = "Các số chính phương: " . implode(", ", timSoChinhPhuong($mang)); break;
        case 'd': $ket_qua = "Các số chẵn: " . implode(", ", laySoChan($mang)); break;
        case 'e': $ket_qua = "Các số lẻ: " . implode(", ", laySoLe($mang)); break;
        case 'f': $ket_qua = "Mảng sau khi sắp xếp: " . implode(", ", sapXepTang($mang)); break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Câu 13 - Quản lý mảng</title>
</head>
<body>
    <form method="post">
        <p>Nhập mảng (cách nhau bởi dấu phẩy): <br>
        <input type="text" name="day_so" value="<?= isset($_POST['day_so']) ? $_POST['day_so'] : '4, 9, 2, 8, 15, 16' ?>" style="width:300px;"></p>
        
        <p>Chọn công việc: <br>
        <select name="cong_viec">
            <option value="a">a) Tìm số lớn nhất</option>
            <option value="b">b) Tìm số nhỏ nhất</option>
            <option value="c">c) Tìm các số chính phương</option>
            <option value="d">d) In ra các số chẵn</option>
            <option value="e">e) In ra các số lẻ</option>
            <option value="f">f) Sắp xếp tăng dần</option>
        </select></p>
        
        <input type="submit" name="submit" value="Thực hiện">
    </form>

    <?php if ($ket_qua != ""): ?>
        <h4 style="color: blue;">Kết quả: <?= $ket_qua ?></h4>
    <?php endif; ?>
</body>
</html>