<?php
// Hier worden alle variablen gedefineerd

$title = "Welkom in Walhalla!";
$description = "Dit is de beschrijving";
$heading = "Dit is de heading";
$paragraph = "Dit is een paragraaf";

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title><?=$title;?></title>
    <meta name="description" content="<?=$description;?>">
</head>
<body>
    <section>
        <?=$title; ?>
        <h1><?=$heading; ?></h1>
        <?=$description; ?>
        <p><?=$paragraph;?></p>
    </section>
</body>
</html>