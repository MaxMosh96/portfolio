<?php
    $r = rand(1, 255);
    $r2 = rand(2, 40);
    $r3 = mt_rand(30, 90) / 10;
    if ($r2 % 2 !== 0) {
        $r2++;
    }
    number_format($r3, 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$r;?></p><br>
    <p><?=$r2;?></p><br>
    <p><?=$r3;?></p>
</body>
</html>