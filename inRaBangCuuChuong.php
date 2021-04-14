<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--//Viết chương trình để in ra bảng cửu chương trong PHP.-->
<table border="1px">
    <tr>
        <?php
            for ($i = 1;$i < 10;$i++){
                //lay 1 chuyen xuong for ben duoi
                echo "<td>";
                    for ($j = 1;$j <= 10;$j++){
                        //nhan so 1 lay ben tren xuong roi nhan tu 1 - 10 roi chuyen len lay $++;
                        echo "$i x $j =" . ($i * $j);
                        echo "<br>";
                    }
                echo "</td>";
            }
        ?>
    </tr>
</table>
</body>
</html>


