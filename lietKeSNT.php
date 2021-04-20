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

echo ("Liệt kê 10 số nguyên tố đầu tiên: ");
$n = 10;
$dem = 0; // đếm số số nguyên tố
$i = 2;   // tìm số nguyên tố bắt dầu từ số 2
while ($dem < $n) {
    if (isPrimeNumber($i)) {
        echo ($i . " ");
        $dem++;
    }
    $i++;
}
?>
