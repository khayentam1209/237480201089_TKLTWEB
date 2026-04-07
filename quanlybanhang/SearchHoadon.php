<?php
include 'Connection.php';

if (isset($_GET['makh'])) {
    $makh = $_GET['makh'];

    // Câu lệnh SQL: Lấy tất cả các cột từ bảng HOADON nơi makh khớp với từ khóa
    $sql = "SELECT * FROM HOADON WHERE makh = '$makh'";
    $result = mysqli_query($conn, $sql);

    echo "<h2>Kết quả tìm kiếm cho mã: $makh</h2>";

    // Kiểm tra xem có hóa đơn nào được tìm thấy không
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' cellpadding='10'>";
        echo "<tr>
                <th>Mã Hoá Đơn</th>
                <th>Mã Hàng</th>
                <th>Mã Khách Hàng</th>
                <th>Tổng Tiền</th>
              </tr>";
        
        // Vòng lặp để đổ dữ liệu ra từng dòng của bảng
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['mahd'] . "</td>";      
            echo "<td>" . $row['mahang'] . "</td>";    
            echo "<td>" . $row['makh'] . "</td>";      
            echo "<td>" . number_format($row['thanhtien']) . " VNĐ</td>"; 
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='color: red;'>Không tìm thấy hóa đơn nào của khách hàng này!</p>";
    }
}

mysqli_close($conn);
?>
<br>
<a href="SearchHoadon.html">Tiếp tục tìm kiếm</a>