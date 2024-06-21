<?php
// Stuur door naar ecogrow/home/nl als geen aanvullende informatie wordt gegeven
if (!isset($_GET['page']) && !isset($_GET['lang'])) {
    header("Location: /ecogrow/home/nl");
    exit();
}

include 'includes/nav.php';

// Bepaal de huidige pagina en taal hiervan
$page = isset($_GET['page']) && array_key_exists($_GET['page'], $pages) ? $_GET['page'] : 'home';
$lang = isset($_GET['lang']) && in_array($_GET['lang'], ['nl', 'en']) ? $_GET['lang'] : 'nl';

// Functie om het huidige menu-item te highlighten
function isActive($currentPage, $pageName) {
    return $currentPage === $pageName ? 'active' : '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Dynamische documenttitel wordt hier weergegeven -->
    <title><?= $pages[$page]['title'][$lang]; ?></title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--<script src="../assets/js/main.js"></script>-->
</head>
<body>
    <?= $pages[$page]['content'][$lang]; ?>
</body>
</html>