<table border="1" cellspacing="0">
    <?php
    for($row=1; $row<=8; $row++){
        echo "<tr>";
        for($col=1; $col<=8; $col++){
            $color = ($row + $col) % 2 == 0 ? "white" : "black";
            echo "<td style='width:30px; height:30px; background-color:$color'></td>";
        }
        echo "</tr>";
    }
    ?>
</table>