<?php
$A = 8;
$B = -2;
$C = 5.5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="math-container">
    <span><?php echo    $A. ' + ' .$B. ' = '; ?><span class="result <?php echo ($A + $B > 0) ? 'positive-sum' : 'negative-sum'; ?>"><?php echo ($A + $B);?></span></span><br>
    <span><?php echo $A. ' - ' .$C. ' = '; ?><span class="result <?php echo ($A - $C > 0) ? 'positive-sum' : 'negative-sum'; ?>"><?php echo ($A - $C);?></span></span><br>
    <span><?php echo $B. ' * ' .$C. ' = '; ?><span class="result <?php echo ($B * $C > 0) ? 'positive-sum' : 'negative-sum'; ?>"><?php echo ($B * $C);?></span></span><br>
    <span><?php echo $A. ' / ' .$B. ' = '; ?><span class="result <?php echo ($A / $B > 0) ? 'positive-sum' : 'negative-sum'; ?>"><?php echo ($A / $B);?></span></span><br>
    <span><?php echo $A. ' * ' .$C. ' - ' .$B. ' * ' .$C. ' = '; ?><span class="result <?php echo ($A * $C - $B * $C > 0) ? 'positive-sum' : 'negative-sum'; ?>"><?php echo ($A * $C - $B * $C);?></span></span>
    </div>
    <style>
        *, html {
    margin: 0;
    padding: 0;
    overflow: hidden;
    box-sizing: border-box;
}

body {
    width: 100%;
    height: 100%;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #cdc1ff;
    background-image: linear-gradient(316deg, #cdc1ff 0%, #e5d9f2 74%);
}

.math-container {
    width: 30%;
    padding: 2.5rem;
    height: 45vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    font-size: 25px;
    font-weight: 700;
    background-color: #923cb5;
    background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
    color: white;
    text-shadow: 2px 1px 1px black;
    -webkit-text-stroke: .55px black;
    border: 2px solid black;
    border-radius: 5%;
    gap: 1.5px;
}

.math-container span {
    display: flex;
    justify-content: space-between;
    align-items: center;
    word-wrap: normal;
    width: 100%;
}

.math-container span .result {
    width: 25%;
    display: block;
    text-align: center;
    background-color: black;
    border-width: 3px;
    border-style: dashed;
    border-color: black;
    border-radius: 5.5%;
    padding-top: .25rem;
    padding-bottom: .25rem;
}

.result.positive-sum {
    color: inherit;
    box-shadow: inset 26px 22px 42px -18px green;
}

.result.negative-sum {
    color: inherit;
    box-shadow: inset 26px 22px 42px -18px red;
}
    </style>
</body>
</html>