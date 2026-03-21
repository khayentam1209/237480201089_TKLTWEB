<?php
session_start();
$thong_bao = "";

// Xử lý logic đăng nhập
if (isset($_POST['btnDangNhap'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    // Giả lập đọc file users.ini (Email|Password)
    // admin@blu.edu.vn|123456
    if ($email == "admin@blu.edu.vn" && $pass == "123456") {
        setcookie("user_login", $email, time() + 180); // Lưu 3 phút (180s)
        $_SESSION['start_time'] = time();
        $thong_bao = "Đăng nhập thành công!";
    } else {
        $thong_bao = "Thông tin không chính xác!";
    }
}
?>

<style>
    .login-container { width: 350px; background-color: #f2f2f2; border: 1px solid #ccc; font-family: Arial; }
    .header { background-color: #333; color: white; padding: 10px; text-align: center; }
    .form-group { padding: 10px; }
    .form-group input { width: 90%; margin-bottom: 10px; padding: 5px; }
    .btn-login { background-color: #444; color: white; width: 100%; padding: 8px; border: none; cursor: pointer; }
    .btn-reg { background-color: #666; color: white; width: 100%; padding: 8px; border: none; margin-top: 5px; }
</style>

<div class="login-container">
    <div class="header">Đăng nhập thành viên</div>
    <form method="post" class="form-group">
        <input type="text" name="email" placeholder="Email name">
        <input type="password" name="pass" placeholder="Password">
        <input type="text" name="maso" placeholder="Mã số">
        <button type="submit" name="btnDangNhap" class="btn-login">Đăng nhập</button>
        <button type="button" class="btn-reg">Đăng ký</button>
    </form>
    <p style="text-align:center; color:red;"><?php echo $thong_bao; ?></p>
</div>