<form method="post">
    Số thứ 1: <input type="number" name="n1" value="<?php echo $_POST['n1']??''; ?>"><br>
    Số thứ 2: <input type="number" name="n2" value="<?php echo $_POST['n2']??''; ?>"><br>
    Kết quả: <input type="text" readonly value="<?php 
        if(isset($_POST['calc'])){
            $a = $_POST['n1']; $b = $_POST['n2'];
            switch($_POST['calc']){
                case 'Cộng': echo $a + $b; break;
                case 'Trừ': echo $a - $b; break;
                case 'Nhân': echo $a * $b; break;
                case 'Chia': echo $b != 0 ? $a / $b : 'Lỗi chia 0'; break;
            }
        }
    ?>"><br>
    <input type="submit" name="calc" value="Cộng">
    <input type="submit" name="calc" value="Trừ">
    <input type="submit" name="calc" value="Nhân">
    <input type="submit" name="calc" value="Chia">
</form>