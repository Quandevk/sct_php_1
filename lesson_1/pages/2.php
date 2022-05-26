<?php

$image_1 = '../img/img1.png';
$image_2 ='../img/Акция 2.png';
$image_3 ='../img/Акция 3.png';
$image_1 ='../img/travel-flyer-template_23-2148065132.webp';
$image_2 ='../img/wine-bottle-and-paper-bag-mockup_417483-1038.webp';
$page_1 = '1.php';
$page_2 = '../index.php';
?>
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
<ul id="menu">
    <li><a href="<?php echo $page_2;?>">Главная</a></li>

    <li><a href="<?php echo $page_1;?>"">инфо</a></li>

</ul>
<img src="<?php echo $image_1; ?>"/>
<img src="<?php echo $image_2; ?>"/>
<img src="<?php echo $image_3; ?>"/>
</body>
</html>
