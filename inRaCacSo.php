<?php
//Bài 03: Viết một chương trình để in ra các số từ 1 đến 100.
// Nhưng đối với các số chia hết cho 3 thì in ra chữ “Fizz” thay vì hiển thị số đó
// và đối với các số chia hết cho 5 thì in ra chữ “Buzz”.
// Đối với các số vừa chia hết cho 3 và 5 thì in ra chữ “FizzBuzz”.
//
//Gợi ý:
//
//Lặp i từ 1 đến 100.
//Kiểm tra nếu i chia hết cho 3 và 5 thì in ra "FizzBuzz".
//Kiểm tra nếu i chia hêt cho 3 thì in ra "Fizz".
//Kiểm tra nếu i chia hêt cho 5 thì in ra "Buzz".

$number = 100;
for ($i = 1; $i <=$number;$i++){
    if ($i%3 ===0 && $i%5 === 0){
        echo "FizzBuzz $i"."<br>";
    }elseif ($i%3 === 0){
        echo "Fizz $i"."<br>";
    }elseif ($i%5 === 0){
        echo "Buzz $i"."<br>";
    }else{
        echo "$i"."<br>";
    }
}