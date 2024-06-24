<?php
// Aanmaak van de array middels de [] verkorting
$favGames = [
    'Tom' => 'Final Fantasy VI',
    'Johan' => 'Jazz Jackrabbit 2',
    'Marco' => 'Clash of Clans',
    'Casper' => 'Super Smash Bros. Melee',
];

// Bestaande waarde van array aanpassen
$favGames['Casper'] = 'Super Smash Bros. Ultimate';

// Nieuwe waarden toevoegen aan bestaande array
$favGames['Gino'] = 'Habbo Hotel';
$favGames['Nancy'] = 'The Sims 4';

// Sleutels van array op alfabetische volgorde sorteren
ksort($favGames);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre><?=var_dump($favGames);?></pre>
</body>
</html>