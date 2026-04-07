<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tvt_b1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include 'Connection.php';

$makh = $_POST['makh'];

$sql = "SELECT * FROM hoadon WHERE makh='$makh'";
$result = $conn->query($sql);

echo "<h1>DANH SÁCH HÓA ĐƠN CỦA KHÁCH HÀNG</h1>";
echo "<hr>";

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";

    $columnsSql = "SHOW FULL COLUMNS FROM hoadon";
    $columnsResult = $conn->query($columnsSql);
    $columns = [];
    while ($column = $columnsResult->fetch_assoc()) {
        $columns[] = $column;
        echo "<th>{$column['Comment']}</th>"; // Hiển thị chú thích (comment)
    }
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>{$value}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Không tìm thấy hóa đơn.</p>";
}

$conn->close();
?>

</body>
</html>