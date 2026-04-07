<?php
$conn = mysqli_connect("localhost", "root", "", "quanlybanhang");

if (!$conn) {
    die("Kết nối thất bại");
}

$dulieu = $_POST['dulieu'];

if ($dulieu == "hanghoa") {

    echo "<h2>DANH SÁCH HÀNG HÓA</h2>";

    $sql = "SELECT * FROM hanghoa LIMIT 10";
    $result = mysqli_query($conn, $sql);

    echo "<table border='1' cellpadding='5'>
            <tr>
                <th>Mã hàng</th>
                <th>Tên hàng</th>
                <th>Mã NSX</th>
                <th>Năm SX</th>
                <th>Giá</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['mahang']}</td>
                <td>{$row['tenhang']}</td>
                <td>{$row['mansx']}</td>
                <td>{$row['namsx']}</td>
                <td>{$row['gia']}</td>
              </tr>";
    }

    echo "</table>";

    // 🔸 Thống kê
    $sqlDell = "SELECT COUNT(*) AS dem FROM hanghoa WHERE mansx='DE'";
    $sqlLenovo = "SELECT COUNT(*) AS dem FROM hanghoa WHERE mansx='LE'";

    $kqDell = mysqli_fetch_assoc(mysqli_query($conn, $sqlDell));
    $kqLenovo = mysqli_fetch_assoc(mysqli_query($conn, $sqlLenovo));

    echo "<br>Danh sách gồm có 10 mặt hàng, trong đó:<br>";
    echo "Nhà sản xuất DELL có: " . $kqDell['dem'] . "<br>";
    echo "Nhà sản xuất Lenovo có: " . $kqLenovo['dem'] . "<br>";
}

mysqli_close($conn);
?>