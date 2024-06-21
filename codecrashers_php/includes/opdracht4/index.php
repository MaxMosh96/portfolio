<?php
        include("includes/menu.php");
        include("includes/footer.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 4</title>
    <style>
        .menu-container {
            display: flex;
            justify-content: space-around;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .menu-item {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .menu-link {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
 <div class="menu-container">
    <?=$completemenu; ?>
 </div>

    <h1>Welkom op de indexpagina!</h1>

</body>

</html>
