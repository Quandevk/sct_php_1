<?php

$title = 'Главная страница';
$page_1 = 'pages/1.php';
$page_2 = 'pages/2.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $title?> </title>
</head>
<body>
    <h2><?php echo $title?></h2>
    <li><a href="<?php echo $page_2;?>">picture</a></li>

    <li><a href="<?php echo $page_1;?>"">Инфо</a></li>
</body>
</html>
