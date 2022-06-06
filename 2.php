<?php

$page = '2.php';
$a = 5;
$b = 1;
$c = 2;
$x = null;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<style>
    ul li.active a {
        font-weight: bold;
    }
</style>
<body>
<ul>
    <li <?php if ($page == 1) {
        echo 'class="active"';
    } ?>><a href="1.php">Главная</a></li>
    <li <?php if ($page == 2) {
        echo 'class="active"';
    } ?>><a href="2.php">О нас</a></li>
    <li <?php if ($page == 3) {
        echo 'class="active"';
    } ?>><a href="3.php">Контакты</a></li>
</ul>
<?php
if ($a > $b) {
    if ($b > $c) {
        $x = $a;
        $a = $c;
        $c = $x;
    } else {
        if ($c < $a) {
            $x = $a;
            $a = $b;
            $b = $c;
            $c = $x;
        } else {
            $x = $b;
            $b = $c;
            $a = $x;
        }
    }
} else {
    if ($c < $a) {
        $x = $b;
        $b = $a;
        $a = $c;
        $c = $x;
    } else {
        if ($c < $b) {
            $x = $b;
            $b = $c;
            $c = $x;
        }
    }
}
echo $a . ' ', $b . ' ', $c;
?>
</body>
</html>