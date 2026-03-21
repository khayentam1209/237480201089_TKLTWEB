<select>
    <?php
    $currentYear = date("Y");
    for($i=1900; $i<=$currentYear; $i++){
        echo "<option value='$i'>$i</option>";
    }
    ?>
</select>