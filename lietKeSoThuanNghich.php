<?php
//Một số được gọi là số thuận nghịch nếu ta đọc từ trái sang phải hay từ phải sang trái số đó ta vẫn nhận được một số giống nhau.
// Ví dụ 123321 là một số thuận nghịch. Hãy liệt kê tất cả các số thuận nghịch có 6 chữa số.


define ( "DEC_10", 10 );

function isThuanNghich($n) {
    // phân tích số n thành các chữ số và lưu vào $arrNumbers
    $arrNumbers = array ();
    $count = 0;

    do {
        $arrNumbers [$count] = $n % DEC_10;
        $count ++;
        $n = floor ( $n / DEC_10 );
    } while ( $n > 0 );
    // kiểm tra tính thuận nghịch
    $size = count ( $arrNumbers );
    for($i = 0; $i < ($size / 2); $i ++) {
        if ($arrNumbers [$i] != $arrNumbers [$size - $i - 1]) {
            return false;
        }
    }
    return true;
}

// Kiểm tra số thuận nghịch
$count = 0;
$number = 200000;
// in ra màn hình các số thuận nghịch có 4 chữ số
for($i = 100000; $i < $number; $i ++) {
    if (isThuanNghich ( $i )) {
        echo ($i . "<br>");
        $count ++;
    }
}
echo ("Tổng các số thuận nghịch có 6 chữ số từ 100000 đến $number là: $count");
?>