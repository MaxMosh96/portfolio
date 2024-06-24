<?php
// Associatieve array met sleutel-waarde combinaties
$associativeArray = [
    'Servië' => 'Belgrado',
    'Bulgarije' => 'Sofia',
    'Roemenië' => 'Boekarest',
    'Moldavië' => 'Chisinau',
    'Hongarije' => 'Boedapest',
    'Albanië' => 'Tirana',
    'Oekraïne' => 'Kyiv',
    'Slowakije' => 'Bratislava'
];

// Omgekeerde alfabetische sortering van de waarden
krsort($associativeArray);

// Verwijdering van de rijen Moldavië & Albanië
unset($associativeArray['Moldavië'], $associativeArray['Albanië']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach ($associativeArray as $key => $value) {
            echo "<table>$key - $value</table>";
        }
    ?>
</body>
</html>