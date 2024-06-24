<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Functie om een getal tot een bepaalde macht te verheffen
        function machtBerekenen($getal, $macht) {
            return pow($getal, $macht);
        }

        // Sommen
        $getal1 = 4;
        $macht1 = 2;
        $uitkomst1 = machtBerekenen($getal1, $macht1);

        $getal2 = 5;
        $macht2 = 3;
        $uitkomst2 = machtBerekenen($getal2, $macht2);

        $getal3 = 3;
        $macht3 = 4;
        $uitkomst3 = machtBerekenen($getal3, $macht3);
    ?>

    <?php
    // Functie om de wortel van een getal te berekenen
        function wortelBerekenen($getal) {
            return sqrt($getal);
        }

        // Sommen
        $getal4 = 9;
        $uitkomst4 = wortelBerekenen($getal4);

        $getal5 = 16;
        $uitkomst5 = wortelBerekenen($getal5);

        $getal6 = 81;
        $uitkomst6 = wortelBerekenen($getal6);
    ?>

    <!-- Weergave van de sommen -->
    <p><?php echo "$getal1<sup>$macht1</sup> is gelijk aan <strong>$uitkomst1.</strong>";?></p>
    <p><?php echo "$getal2<sup>$macht2</sup> is gelijk aan <strong>$uitkomst2.</strong>";?></p>
    <p><?php echo "$getal3<sup>$macht3</sup> is gelijk aan <strong>$uitkomst3.</strong>";?></p>
    <p>&radic;<?php echo "$getal4 is gelijk aan <strong>$uitkomst4.</strong>";?></p>
    <p>&radic;<?php echo "$getal5 is gelijk aan <strong>$uitkomst5.</strong>";?></p>
    <p>&radic;<?php echo "$getal6 is gelijk aan <strong>$uitkomst6.</strong>";?></p>
</body>
</html>