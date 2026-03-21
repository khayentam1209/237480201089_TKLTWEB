<?php
$a = [1, 4, 3, 6, 8, 2, 7];
echo "Mảng: ".implode(", ", $a)."<br>";
echo "Tổng chẵn: ".array_sum(array_filter($a, fn($n)=>$n%2==0))."<br>";
echo "Tổng lẻ: ".array_sum(array_filter($a, fn($n)=>$n%2!=0))."<br>";
echo "Max: ".max($a)." - Min: ".min($a)."<br>";
echo "Đảo ngược: ".implode(", ", array_reverse($a));
?>