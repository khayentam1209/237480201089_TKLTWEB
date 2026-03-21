<?php
session_start();
if(isset($_POST['btnLogin'])) {
    $u = $_POST['txtUser'];
    $e = $_POST['txtEmail'];
    $p = $_POST['txtPass'];

    // Giả sử kiểm tra hợp lệ (có thể kết nối CSDL hoặc so khớp cứng)
    if($u != "" && $e != "" && $p == "123") {
        $_SESSION['Username'] = $u;
        $_SESSION['Email'] = $e;
        header("Location: mainpage.php");
    } else {
        echo "Thông tin đăng nhập không hợp lệ! <a href='login.html'>Thử lại</a>";
    }
}
?>