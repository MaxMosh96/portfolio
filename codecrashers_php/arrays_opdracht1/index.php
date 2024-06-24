<?php
    $supermarkten = array('Albert Heijn', 'Jumbo', 'Coop', 'Jan Linders',
    'Edah', 'C1000');

    // "Aldi" en "Lidl" toevoegen aan bestaande array
    array_push($supermarkten, 'Aldi', 'Lidl');

    // Waarde veranderen van "Coop" naar "Plus"
    $supermarkten[2] = "Plus";

    // Waarde "Edah" verwijderen van bestaande array
    unset($supermarkten[4]);

    // Waarde "C1000" verwijderen uit bestaande array zonder verlies van indexnummer
    $supermarkten = array_replace($supermarkten, array(5 => null));
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php print_r($supermarkten);?>
</body>
</html>