<!DOCTYPE html>
<html>
<body>

<form method="post">
    Số x: <input type="number" name="x"><br>
    Số y: <input type="number" name="y"><br>
    <input type="submit" value="Tính">
</form>

<?php
if(isset($_POST['x'])){
    $x = $_POST['x'];
    $y = $_POST['y'];

    echo "Tổng: " . ($x + $y) . "<br>";
    echo "Hiệu: " . ($x - $y) . "<br>";
    echo "Tích: " . ($x * $y) . "<br>";

    if($y != 0)
        echo "Thương: " . ($x / $y) . "<br>";
    else
        echo "Không chia được<br>";
}
?>

</body>
</html>