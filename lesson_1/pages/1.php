<?php

$name = 'Tom';
$address = 'Moscow';
$reg_add = 'Volgograd';
$age = '21';
$gender = 'M';
$page_1 = '2.php';
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

    <li><a href="<?php echo $page_1;?>"">picture</a></li>

</ul>
    <?php echo 'Name: '. $name,'<br>','Address: '. $address, '<br>','reg_address: '. $reg_add,'<br>','age: '. $age,'<br>','gender: '. $gender;
    ?>

</body>
</html>