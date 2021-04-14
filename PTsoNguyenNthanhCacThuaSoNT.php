<?php
//Viết chương trình phân tích số nguyên n thành các thừa số nguyên tố. Ví dụ: 12 = 2 x 2 x 3.

$n = 0;
if (isset ( $_POST ['n'] )) {
    $n = $_POST ['n'];
}

function phanTichSoNguyen($n) {
    $i = 2;
    $arrNumbers = array ();
    $arrNumbers [0] = "";
    $count = 0;

    // phân tích số nguyên n thành tích các số nguyên tố
    while ( $n > 1 ) {
        if ($n % $i == 0) {
            $n = floor ( $n / $i );
            $arrNumbers [$count] = $i;
            $count = $count + 1;
        } else {
            $i ++;
        }
    }
    // nếu listNumbers trống thì add n vào listNumbers
    if ($arrNumbers [0] == "") {
        $arrNumbers [0] = $n;
    }
    return $arrNumbers;
}

?>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Nhập số nguyên:</td>
                <td><input type="text" name="n" value="<?=$n?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Phân tích"></td>
            </tr>
        </table>
    </form>
    <br>
<?php

if (filter_var ( $n, FILTER_VALIDATE_INT )) {
    // phân tích số nguyên dương n
    $arrNumbers = phanTichSoNguyen ( $n );
    // in kết quả ra màn hình
    echo ("Kết quả: $n = ");
    $size = count ( $arrNumbers );

    // hiển thị các phần tử của mảng
    for($i = 0; $i < $size - 1; $i ++) {
        echo "$arrNumbers[$i] x ";
    }
    echo $arrNumbers [$size - 1];
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>