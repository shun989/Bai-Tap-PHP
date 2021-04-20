<?php
function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt($n);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$count = 0;
echo ("Liệt kê cac số nguyên tố có 5 chữ số:<br>");
for ($i = 10001; $i < 11111; $i+=2) {
    if (isPrimeNumber($i)) {
        echo ($i . "<br>");
        $count++;
    }
}
echo ("Tổng các số nguyên tố có 5 chữ số là: $count");
?>
