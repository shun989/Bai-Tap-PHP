<?php
//Viết chương trình tính giai thừa của n. Giai thừa của 1 số là tích các số liên tiếp từ 1 đến số đó. Trường hợp đặc biệt, giai thừa của 0 và 1 là 1.
//
//Ví dụ: giai thừa của 5 là 1*2*3*4*5 = 120

//Code mẫu: Tính giai thừa không sử dụng đệ quy


$a = 5;
$b = 0;
$c = 10;

function tinhGiaithua($n)
{
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for ($i = 2; $i <= $n; $i++) {
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}

// tính giai thừa
echo("Giai thừa của " . $a . " là: " . tinhGiaithua($a) . "<br>");
echo("Giai thừa của " . $b . " là: " . tinhGiaithua($b) . "<br>");
echo("Giai thừa của " . $c . " là: " . tinhGiaithua($c) . "<br>");
