<?php
echo "Chao ban, <br>";

if (isset($_COOKIE['thoiGianTruyCap'])) {
    // Hiển thị thời gian từ lần lưu trước đó
    echo "Thoi gian truy cap gan day nhat la: " . $_COOKIE['thoiGianTruyCap'];
    // Cập nhật lại cookie mới (sống trong 600 giây)
    setcookie('thoiGianTruyCap', date('d/m/Y H:i:s'), time() + 600);
} else {
    // Lần đầu truy cập
    setcookie('thoiGianTruyCap', date('d/m/Y H:i:s'), time() + 600);
    echo "Day la lan dau tien ban truy cap trang web.";
}
?>