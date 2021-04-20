<?php
//Viết chương trình tìm ước số chung lớn nhất (UCLN) và bội số chung nhỏ nhất (BCNN) của hai số a và b.
//USCLN : ước số chung lớn nhất.
//BSCNN : bội số chung nhỏ nhất.
//Gợi ý:
//Sử dụng giải thuật Euclid.

function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}

function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}

$a = 15;
$b = 40;
// tính USCLN của a và b
echo ("USCLN của $a và $b là: " . USCLN($a, $b)) . "<br>";
// tính BSCNN của a và b
echo ("BSCNN của $a và  $b là: " . BSCNN($a, $b));
?>
