<?php
//ve hinh tam giac.
for($i = 1;$i<20;$i++){
    for($j = (20-$i);$j<20;$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<?php
//tam giac can
    $row = 10;
    $star = 60;
    for ($i = 1; $i < $row; $i++){
        for ($j = 0; $j < $star;$j++){
            if ($j < $star - $i){
                echo "&nbsp;&nbsp";
            }else{
                echo "*";
            }
        }
        for ($j = 0; $j <$i;$j++){
            echo "*";
        }
        echo "<br>";
    }


?>


<?php
//ve hinh chu nhat
for($i = 0;$i < 10; $i++){
    for($j = 0; $j <30;$j++){
        echo "*";
    }
    echo "<br>";
}
