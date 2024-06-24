<?php
require_once 'includes/pages.php';

// Bepaal de huidige pagina en taal
$page = isset($_GET['page']) && array_key_exists($_GET['page'], $pages) ? $_GET['page'] : 'home';
$lang = isset($_GET['lang']) && in_array($_GET['lang'], ['nl', 'en', 'pl']) ? $_GET['lang'] : 'nl';

// Functie om het huidige menu-item te markeren
function isActive($currentPage, $pageName) {
    return $currentPage === $pageName ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="<?=$lang;?>">
<head>
    <meta charset="UTF-8">
    <title><?=$pages[$page]['title'][$lang];?></title>
    <base href="http://localhost/codecrashers-REA-/PHP/14-slugs/opdracht4/" target="_self">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div id="container">
        <nav>
			<!-- Taalwisselaar -->
		<div class="language-switcher">
                <a href="<?=$page;?>/nl"><img src="./images/nl.png" alt="Nederlands"></a>
                <a href="<?=$page;?>/en"><img src="./images/gb.png" alt="English"></a>
                <a href="<?=$page;?>/pl"><img src="./images/pl.png" alt="Polski"></a>
            </div>
            <ul>
                <?php foreach ($pages as $key => $value): ?>
                    <?php if ($key !== 'notfound'): ?>
                        <li class="<?=isActive($page, $key);?>"><a href="<?=$key;?>/<?=$lang;?>"><?=$value['title'][$lang];?></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
        <section>
            <h1><?=$pages[$page]['title'][$lang];?></h1>
            <p><?=$pages[$page]['content'][$lang];?></p>
        </section>
    </div>
</body>
</html>
