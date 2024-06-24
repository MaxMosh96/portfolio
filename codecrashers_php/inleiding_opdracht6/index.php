<?php

$var = 'The club isn\'t the best place to find a lover, so the bar is where I go. Me and my friends at the table doing shots, drinking fast and then we talk slow.';

$varReversed = strrev($var);

$varShuffled = str_shuffle($var);

$position = strpos($var, 'o');

$lastposition = strrpos($var, 't');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$var;?></p><br>
    <p>Bij deze zin komt de letter <strong>'o'</strong> voor het eerst voor op indexnummer: <strong><?=$position;?></strong></p><br>
    <p>De laatste keer dat de letter <strong>'t'</strong> voorkomt in de voorbeeldzin heeft een indexnummer van: <strong><?=$lastposition;?></strong></p><br>
    <p><?=$varReversed;?></p><br>
    <p><?=$varShuffled;?></p>
</body>
</html>