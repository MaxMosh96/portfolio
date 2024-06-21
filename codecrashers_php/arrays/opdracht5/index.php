<?php
    // Aanmaak van catalogus-array met subarrays
    $catalogus = [
        'Rode wijnen' => ['Merlot', 'Carbernet Sauvignon', 'Grenache', 'Malbec'],
        'Witte wijnen' => ['Chardonnay', 'Riesling', 'Pinot Blanc', 'Trebbiano'],
        'Speciaalbieren' => ['Duvel', 'Leffe', 'Affligem'],
        'Sterke dranken' => ['Baileys', 'Wodka', 'Whisky', 'Cognac', 'Rum', 'Malibu']
    ];

    // Kleuren voor elke categorie
    $kleuren = [
        'Rode wijnen' => '#FF0000',  // Rood
        'Witte wijnen' => '#FFFFFF', // Wit
        'Speciaalbieren' => '#32CD32',  // Groen
        'Sterke dranken' => '#FFA500',  // Oranje
        'Likeuren' => '#F5F5DC'  // Beige
    ];

    // Verandert de waarde van 'Pinot Blanc' naar 'Pinot Gris' binnen 'Witte wijnen'
    $catalogus['Witte wijnen'][2] = 'Pinot Gris';

    // De waarde van sleutel 'Sterke dranken' aanpassen naar 'Gedestilleerde dranken'
    $catalogus['Gedestilleerde dranken'] = $catalogus['Sterke dranken'];
    unset($catalogus['Sterke dranken'][0], $catalogus['Sterke dranken'][5]);


    // Oorspronkelijke 'Gedestilleerde dranken' verwijderen van catalogus
    unset($catalogus['Gedestilleerde dranken']);

    // Toevoeging van de waarde "Guiness" aan 'Speciaalbieren'
    array_splice($catalogus['Speciaalbieren'], 0, 0, 'Guinness');


    // Toevoeging van 'Likeuren' array aan catalogus
    $catalogus['Likeuren'] = ['Baileys', 'Malibu', 'Amaretto', 'Cointreau'];

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
        $i = 1;
        echo "<ul>";
        foreach ($catalogus as $categorie => $wijnen) {
            echo "<li style='color:{$kleuren[$categorie]}'>$categorie<ul>";
            foreach ($wijnen as $wijn) {
                echo "<li>$wijn</li>";
            }
            echo "</ul></li>";
            $i++;
        }
        echo "</ul>";
    ?>
</body>
<style>
    *, html {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        width: 100%;
        height: 100%;
        background: #000;
        position: absolute;
        letter-spacing: .05rem;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    body ul {
        display: flex;
        flex-direction: column;
        list-style-type: circle;
    }

    body ul li {
        font-family: 'Roboto', serif;
        font-size: 25px;
        font-weight: bold;
        list-style-type: disc;
    }

    body ul li ul li {
        font-family: 'Lucida Handwriting', sans-serif;
        -webkit-text-stroke: .25px black;
        font-size: 18.5px;
        font-weight: normal;
        list-style-type: circle;
    }

    body ul ul {
        margin-left: 20px; /* inspringen voor geneste lijsten */
    }
</style>
</html>