<?php
    // Tien variablen die ieder een willekeurig nummer zullen outputten
    $arrayNum1 = rand(1, 100);
    $arrayNum2 = rand(1, 250);
    $arrayNum3 = rand(5, 25);
    $arrayNum4 = rand(12, 120);
    $arrayNum5 = rand(50, 80);
    $arrayNum6 = rand(42, 64);
    $arrayNum7 = rand(33, 50);
    $arrayNum8 = rand(4, 10);
    $arrayNum9 = rand(20, 45);
    $arrayNum10 = rand(11, 23);

    // Array met tien willekeurige nummers
    $indexArray = [$arrayNum1, $arrayNum2, $arrayNum3, $arrayNum4, $arrayNum5,
    $arrayNum6, $arrayNum7, $arrayNum8, $arrayNum9, $arrayNum10];

    // Sorteer de array van groot naar klein
    rsort($indexArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
    <?php
    // Geef de elementen weer in een <li> tag
    foreach ($indexArray as $number) {
        echo "<li>$number</li>";
    }
    ?>
    </ol>
</body>
</html>