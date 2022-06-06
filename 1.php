<?php

$page = '1.php';
$int = 0;
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
if ($int >= 0) {
    echo $int . ' - число положительное';
} else {
    echo $int . ' - число отрицательное';
}
?>
</body>
</html>