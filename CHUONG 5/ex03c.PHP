<?php
$x = rand(1, 100);
$y = rand(1, 100);

echo "x = $x <br>";
echo "y = $y <br>";

if($x > $y){
    echo "x > y";
}
else if($x < $y){
    echo "x < y";
}
else{
    echo "x = y";
}
?>