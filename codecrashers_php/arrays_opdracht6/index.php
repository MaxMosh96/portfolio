<?php

// Data voor katana's
$dataKatana = [
    ["id" => 1, "naam" => "Katana", "lengte" => 100, "materiaal" => "Staal"],
    ["id" => 2, "naam" => "Kotetsu", "lengte" => 110, "materiaal" => "Koolstofstaal"],
    ["id" => 3, "naam" => "Asura", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 4, "naam" => "Osafune", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 5, "naam" => "Kiyomori", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 6, "naam" => "Muramasa", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 7, "naam" => "Stunner", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 8, "naam" => "Kokuei", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 9, "naam" => "Kazekiri", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 10, "naam" => "Chirijiraden", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 11, "naam" => "Murasame", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 12, "naam" => "Fantomu", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 13, "naam" => "Shockblade", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 14, "naam" => "Defender", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 15, "naam" => "Kiku-ichimonji", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 16, "naam" => "Masamune", "lengte" => 95, "materiaal" => "Damast"],
    ["id" => 17, "naam" => "Purizumu", "lengte" => 95, "materiaal" => "Damast"],
];

// Data voor messen
$dataMessen = [
    ["id" => 18, "naam" => "Keukenmes", "lengte" => 20, "materiaal" => "Roestvrij staal"],
    ["id" => 19, "naam" => "Fileermes", "lengte" => 15, "materiaal" => "Koolstofstaal"],
    ["id" => 20, "naam" => "Broodmes", "lengte" => 25, "materiaal" => "Damast"],
    ["id" => 21, "naam" => "Jachtmes", "lengte" => 18, "materiaal" => "Staal"],
    ["id" => 22, "naam" => "Zakmes", "lengte" => 10, "materiaal" => "Aluminium"],
    ["id" => 23, "naam" => "Survivalmes", "lengte" => 15, "materiaal" => "Roestvrij staal"],
    ["id" => 24, "naam" => "Koksmes", "lengte" => 22, "materiaal" => "Damast"],
    ["id" => 25, "naam" => "Santokumes", "lengte" => 18, "materiaal" => "Koolstofstaal"],
    ["id" => 26, "naam" => "Schilmesje", "lengte" => 8, "materiaal" => "Roestvrij staal"],
    ["id" => 27, "naam" => "Slagersmes", "lengte" => 30, "materiaal" => "Staal"],
    ["id" => 28, "naam" => "Steakmes", "lengte" => 12, "materiaal" => "Roestvrij staal"],
    ["id" => 29, "naam" => "Vleesmes", "lengte" => 25, "materiaal" => "Damast"],
    ["id" => 30, "naam" => "Hakmes", "lengte" => 20, "materiaal" => "Koolstofstaal"],
    ["id" => 31, "naam" => "Vouwmes", "lengte" => 15, "materiaal" => "Aluminium"],
    ["id" => 32, "naam" => "Visfileermes", "lengte" => 18, "materiaal" => "Roestvrij staal"],
    ["id" => 33, "naam" => "Japanse snijder", "lengte" => 22, "materiaal" => "Damast"],
    ["id" => 34, "naam" => "Kampeermes", "lengte" => 12, "materiaal" => "Staal"],
];

// Data voor biologische wapens
$dataBiologischeWapens = [
    ["id" => 35, "naam" => "Antrax", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 36, "naam" => "Zenuwgas", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 37, "naam" => "Botulinetoxine", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 38, "naam" => "Pokkenvirus", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 39, "naam" => "Ebola", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 40, "naam" => "Ricinezaden", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 41, "naam" => "Sarin", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 42, "naam" => "Tularemiebacterie", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 43, "naam" => "Koolstofmonoxide", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 44, "naam" => "Botuline", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 45, "naam" => "Cholera", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 46, "naam" => "Tetrodotoxine", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 47, "naam" => "Tuberculosebacterie", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 48, "naam" => "Venezolaanse equine encefalitisvirus", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 49, "naam" => "Ratelslangengif", "lengte" => null, "materiaal" => "Biologisch"],
    ["id" => 50, "naam" => "Zika-virus", "lengte" => null, "materiaal" => "Biologisch"],
];

// Maak lege arrays om de resultaten op te slaan
$katanaArray = [];
$messenArray = [];
$biologischeWapensArray = [];

// Loop door de meegegeven data voor katana's
foreach ($dataKatana as $katana) {
    $katanaId = $katana["id"];
    $katanaInfo = [
        "naam" => $katana["naam"],
        "lengte" => $katana["lengte"],
        "materiaal" => $katana["materiaal"],
    ];
    $katanaArray[$katanaId] = $katanaInfo;
}

// Loop door de meegegeven data voor messen
foreach ($dataMessen as $mes) {
    $mesId = $mes["id"];
    $mesInfo = [
        "naam" => $mes["naam"],
        "lengte" => $mes["lengte"],
        "materiaal" => $mes["materiaal"],
    ];
    $messenArray[$mesId] = $mesInfo;
}

// Loop door de meegegeven data voor biologische wapens
foreach ($dataBiologischeWapens as $wapen) {
    $wapenId = $wapen["id"];
    $wapenInfo = [
        "naam" => $wapen["naam"],
        "lengte" => $wapen["lengte"],
        "materiaal" => $wapen["materiaal"],
    ];
    $biologischeWapensArray[$wapenId] = $wapenInfo;
}

// Voeg de arrays samen
$wapenArray = array_merge($katanaArray, $messenArray, $biologischeWapensArray);

// CSS-stijlen voor de container die alle boxen bevat
$containerStyles = 'display: flex; flex-wrap: wrap; max-width: 800px; margin: 0 auto; text-align: center;';

// Stijlen voor de box-container
$boxStyles = 'background-color: black; color: white; padding: 10px; margin: 10px; width: 15%;';

// Sorteren op basis van het geselecteerde attribuut en volgorde
$sortKey = isset($_GET['sort']) ? $_GET['sort'] : 'naam';
$sortOrder = isset($_GET['order']) && strtoupper($_GET['order']) === 'DESC' ? SORT_DESC : SORT_ASC;
array_multisort(array_column($wapenArray, $sortKey), $sortOrder, $wapenArray);

// Validatie
$searchQuery = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';

// Paginering toevoegen
$itemsPerPage = 5; // Aantal wapens per pagina
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $itemsPerPage;
$paginatedWapenArray = array_slice($wapenArray, $offset, $itemsPerPage);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?= "div { $containerStyles }"; ?>
        form { margin-bottom: 20px; }
        input[type="text"] { padding: 5px; }
    </style>
    <title>Wapen Overzicht</title>
</head>
<body style="display: flex; flex-direction: column; justify-content: space-evenly; align-items: center;">

<!-- Zoekformulier -->
<form method="get">
    <label for="search">Zoek:</label>
    <input type="text" id="search" name="search" value="<?= $searchQuery ?>">
    <input type="submit" value="Zoek">
</form>

<!-- Sorteerlinks -->
<p>Sorteer op:
    <a href="?sort=naam&order=<?= $sortKey === 'naam' && $sortOrder === SORT_ASC ? 'desc' : 'asc' ?>">Naam</a> |
    <a href="?sort=lengte&order=<?= $sortKey === 'lengte' && $sortOrder === SORT_ASC ? 'desc' : 'asc' ?>">Lengte</a> |
    <a href="?sort=materiaal&order=<?= $sortKey === 'materiaal' && $sortOrder === SORT_ASC ? 'desc' : 'asc' ?>">Materiaal</a>
</p>

<!-- Toon de resultaten in een overzichtelijke indeling -->
<?php
foreach ($paginatedWapenArray as $id => $info) {
    echo "<div style='$boxStyles'>";
    echo "<h1>{$info['naam']}</h1>";

    foreach ($info as $key => $value) {
        echo "<p>$key: $value</p>";
    }

    echo "</div>";
}

// Paginering links
$totalPages = ceil(count($wapenArray) / $itemsPerPage);
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<a href='?page=$i'>$i</a> ";
}
?>

</body>
</html>