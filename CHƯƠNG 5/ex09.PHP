<table border="1" cellpadding="5">
    <tr>
    <?php
    for($i=1; $i<=10; $i++){
        echo "<td>";
        for($j=1; $j<=10; $j++){
            echo "$i x $j = " . ($i*$j) . "<br>";
        }
        echo "</td>";
        if($i == 5) echo "</tr><tr>"; // Xuống dòng sau 5 bảng để dễ nhìn
    }
    ?>
    </tr>
</table>