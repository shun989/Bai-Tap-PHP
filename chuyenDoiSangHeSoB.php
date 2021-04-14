<!--Viết chương trình chuyển đổi một số tự nhiên ở hệ số 10 thành một số ở hệ cơ số B (1 <= B <= 32) bất kỳ.-->
<!---->
<!--Code mẫu: Ví dụ chuyển đối hệ cơ số 10 sang hệ cơ số B-->
<!---->
<!--Giả sử hệ cơ số cần chuyển là 2 <= B <= 16. Số đại điện cho hệ cơ số B > 10 là A = 10, B = 11, C = 12, D = 13, E = 14, F = 15.-->
<!---->
<!--Chúng ta tạo ra một chương trình như sau để chuyển đổi hệ cơ số trong PHP:-->

<?php

function convertNumber($n, $b) {
    if ($n < 0 || $b < 2 || $b > 16 ) {
        return "";
    }

    $result = "";
    $m = 0;
    $remainder = $n;

    while ($remainder > 0) {
        if ($b > 10) {
            $m = $remainder % $b;
            if ($m >= 10) {
                $result = $result . chr (55 + $m);
            } else {
                $result = $result . $m;
            }
        } else {
            $result = $result . ($remainder % $b);
        }
        $remainder = floor($remainder / $b);
    }
    return strrev($result);
}

// ví dụ chuyển đổi số 30 (hệ số 10) sang hệ cơ số 2 và 16
$n = 30;
echo ("So " . $n . " trong he co so 2 = " . convertNumber($n, 2) . "<br>");
echo ("So " . $n . " trong he co so 16 = " . convertNumber($n, 16));

// ví dụ chuyển đổi số 15 (hệ số 10) sang hệ cơ số 2 và 16
$n = 15;
echo ("So " . $n . " trong he co so 2 = " . convertNumber($n, 2) . "<br>");
echo ("So " . $n . " trong he co so 16 = " . convertNumber($n, 16));
?>