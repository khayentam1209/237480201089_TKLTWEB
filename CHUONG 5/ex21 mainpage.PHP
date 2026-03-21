<?php
session_start();
if(!isset($_SESSION['Username'])) {
    header("Location: login.html");
    exit();
}
?>
<h3>TRANG CHÍNH</h3>
<p>Người dùng đã đăng nhập với tên: <b><?php echo $_SESSION['Username']; ?></b></p>
<p>Email là: <b><?php echo $_SESSION['Email']; ?></b></p>
<a href="logout.php">Thoát Trang chính</a>