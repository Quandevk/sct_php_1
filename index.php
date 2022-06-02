<?php

$page_1 = 'pages/L2page_1.php';
$page_2 = 'pages/L2page_2.php';
$page_3 = 'Pages/l2page_3.php';
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
<body>

<ul>
    <li><a href="<?php echo $page_1; ?>">DZ_1</a></li>
    <li><a href="<?php echo $page_2; ?>"">DZ_2</a></li>
    <li><a href="<?php echo $page_3; ?>">DZ_3</a></li>
</ul>
</body>
</html>
