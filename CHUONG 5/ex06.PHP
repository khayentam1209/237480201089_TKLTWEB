<table border="1">
    <tr><th>Số n</th><th>Số n²</th></tr>
    <?php
    for($i=0; $i<=50; $i++){
        echo "<tr><td>$i</td><td>" . ($i*$i) . "</td></tr>";
    }
    ?>
</table>