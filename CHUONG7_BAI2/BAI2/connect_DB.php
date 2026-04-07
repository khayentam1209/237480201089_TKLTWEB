<?php
    require_once "functions.php";

    $servername = "localhost";
    $user = "root";
    $pass = "";
    $databasename = "hosonhanvien";
    $port = "3306";

    // Connect database
    $conn = mysqli_connect($servername,$user,$pass,$databasename,$port);

    // Check Connect database
    if(!$conn){
        showMessage("Kết nối thất bại! Lỗi: ".$conn->error,"danger",1000);
    }else{
        showMessage("Kết nối thành công!","success",1000);
    }
?>