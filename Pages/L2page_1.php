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
<?php
$a = 3;
$b = 2;
$sum = $a + $b;
$diff = $a - $b;
$prod = $a * $b;
$div = $a / $b;
$rtp = pow($a,$b);
echo 'a= '.$a,' b= '.$b,'<br>','Результат сложения = '.$sum,'<br>','Результат вычитания = '.$diff,'<br>','Результат умножения = '.$prod,'<br>','Результат деления = '.$div,'<br>','Результат возведения в степень = '.$rtp;
?>
</body>
</html>