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

$table = $_POST['table'];

$tableDisplayNames = [
    'hanghoa' => 'HÀNG HÓA',
    'hoadon' => 'HÓA ĐƠN',
    'khachhang' => 'KHÁCH HÀNG',
    'nhasanxuat' => 'NHÀ SẢN XUẤT',
    'tonkho' => 'TỒN KHO'
];

$tableDisplayName = $tableDisplayNames[$table];

$sql = "SELECT * FROM $table";
$result = $conn->query($sql);

echo "<h1>DANH SÁCH " . strtoupper($tableDisplayName) . "</h1>";
echo "<hr>";

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";

    $columnsSql = "SHOW FULL COLUMNS FROM $table";
    $columnsResult = $conn->query($columnsSql);
    $columns = [];
    while ($column = $columnsResult->fetch_assoc()) {
        $columns[] = $column;
        echo "<th>{$column['Comment']}</th>"; // Hiển thị chú thích (comment)
    }
    echo "</tr>";

    $rows = [];
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>{$value}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    switch ($table) {
        case 'hanghoa':
            $totalItems = count($rows);
            $summarySql = "SELECT nhasanxuat.tennsx, COUNT(*) as count 
                           FROM hanghoa 
                           JOIN nhasanxuat ON hanghoa.mansx = nhasanxuat.mansx 
                           GROUP BY nhasanxuat.tennsx";
            $summaryResult = $conn->query($summarySql);

            echo "<p>Danh sách gồm có {$totalItems} mặt hàng, trong đó:</p>";
            if ($summaryResult->num_rows > 0) {
                while ($summaryRow = $summaryResult->fetch_assoc()) {
                    echo "<p>Nhà sản xuất {$summaryRow['tennsx']} có: {$summaryRow['count']}</p>";
                }
            }
            break;

        case 'hoadon':
            $totalInvoices = count($rows);
            $totalAmountSql = "SELECT SUM(thanhtien) as totalAmount FROM hoadon";
            $totalAmountResult = $conn->query($totalAmountSql);
            $totalAmountRow = $totalAmountResult->fetch_assoc();

            echo "<p>Danh sách gồm có {$totalInvoices} hóa đơn, tổng thành tiền: {$totalAmountRow['totalAmount']}</p>";
            break;

        case 'khachhang':
            $totalCustomers = count($rows);
            $maxYearSql = "SELECT MAX(namsinh) as maxYear FROM khachhang";
            $minYearSql = "SELECT MIN(namsinh) as minYear FROM khachhang";
            $maxYearResult = $conn->query($maxYearSql);
            $minYearResult = $conn->query($minYearSql);
            $maxYearRow = $maxYearResult->fetch_assoc();
            $minYearRow = $minYearResult->fetch_assoc();

            echo "<p>Danh sách gồm có {$totalCustomers} khách hàng, năm sinh lớn nhất: {$maxYearRow['maxYear']}, năm sinh nhỏ nhất: {$minYearRow['minYear']}</p>";
            break;

        case 'nhasanxuat':
            $totalManufacturers = count($rows);
            echo "<p>Danh sách gồm có {$totalManufacturers} nhà sản xuất.</p>";
            break;

        case 'tonkho':
            $totalItems = count($rows);
            $totalQuantitySql = "SELECT SUM(soluong) as totalQuantity FROM tonkho";
            $totalQuantityResult = $conn->query($totalQuantitySql);
            $totalQuantityRow = $totalQuantityResult->fetch_assoc();

            echo "<p>Danh sách gồm có {$totalItems} mặt hàng tồn kho, tổng số lượng: {$totalQuantityRow['totalQuantity']}</p>";
            break;
    }
} else {
    echo "<p>Không có dữ liệu.</p>";
}

$conn->close();
?>


</body>
</html>