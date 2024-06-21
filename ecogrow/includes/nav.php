<?php
// Array met enkele subarrays voor dynamische paginawisseling
$pages = array(
    'home' => array(
        'title' => array(
            'nl' => 'Home',
            'en' => 'Home'
        ),
        'content' => array(
            'nl' => '<main class="landing-page"><h2>Eco<span>Grow</span> Solutions</h2><p>Hoopt door een positieve bijdrage te leveren de wereld te verbeteren.</p></main>',
            'en' => '<main class="landing-page"><h2>Eco<span>Grow</span> Solutions</h2><p>Hopes to make a positive impact one bit at a time.</p></main>'
        )
        ),
    'about' => array(
        'title' => array(
            'nl' => 'Over ons',
            'en' => 'About us'
        ),
        'content' => array(
            'nl' => '<main class="about-us"><h2>Over ons</h2><p>Om meer over ons te weten, neemt u contact met ons op.</p></main>',
            'en' => '<main class="about-us"><h2>About us</h2><p>Contact us for more information.</p></main>'
        )
        ),
        'page' => array(
            'title' => array(
                'nl' => 'Pagina',
                'en' => 'Page'
            ),
            'content' => array(
                'nl' => 'Dit is een willekeurige pagina.',
                'en' => 'This is a random page.'
            )
        ),
        'contact' => array(
            'title' => array(
                'nl' => 'Contact',
                'en' => 'Contact'
            ),
            'content' => array(
                'nl' => '<main class="contact"><form action="POST"><label for="firstName"><input type="text" name="firstName" placeholder="Uw voornaam"><label for="lastName"><input type="text" name="lastName" placeholder="Uw achternaam"></form></main>',
                'en' => '<main class="contact"><form action="POST"><label for="firstName"><input type="text" name="firstName" placeholder="Your first name"><label for="lastName"><input type="text" name="lastName" placeholder="Your last name"></form></main>'
            )
            ),
            'login' => array(
                'title' => array(
                    'nl' => 'Mijn account',
                    'en' => 'My account'
                ),
                'content' => array(
                    'nl' => 'Hier word een inlogpagina gecreëerd.',
                    'en' => 'There will be a log in page here soon.'
                )
            )
);

// Verwijder de loginpagina uit het zichtbare menu
unset($pages['login']);

// Controleren of de pagina überhaupt bestaat
if (isset($_GET['page']) && isset($_GET['lang'])) {
    $page = $_GET['page'];
    $lang = $_GET['lang'];

    if (array_key_exists($page, $pages) && array_key_exists($lang, $pages[$page]['title'])) {
        $title = $pages[$page]['title'][$lang];
        $content = $pages[$page]['content'][$lang];
    } else {
        // Als de pagina niet bestaat, toon dan de 'notfound'- pagina
        $title = $pages['notfound']['title'][$lang];
        $content = $pages['notfound']['content'][$lang];
    }
} else {
    // Als er geen pagina is gespecificeerd, toon dan de 'home' pagina standaard in het Nederlands
    $title = $pages['home']['title']['nl'];
    $content = $pages['home']['content']['nl'];
}

?>

<header>
    <section class="top">
    <div><i class="bx bxs-purchase-tag"></i><a href=""><?php echo ($lang === 'nl') ? 'Zomersale! Lees meer over onze korting.' : 'Summer sale! Learn more about our discount.'; ?></a></div>
    <div><a href="/ecogrow/login/<?= $lang; ?>"><?php echo ($lang === 'nl') ? 'Mijn account' : 'My account'; ?></a><a href=""><?php echo ($lang === 'nl') ? 'Winkelmandje' : 'Checkout'; ?></a></div>
    </section>
<nav>
    <!-- Visueel menu met arrayitems als websitelocaties -->
    <section class="main-head">
<ul class="nav-menu-left">
<?php foreach ($pages as $pageKey => $pageData): ?>
            <li class="<?= isActive($page, $pageKey) ?>"><a href="/ecogrow/<?= $pageKey; ?>/<?= $lang; ?>"><?= $pageData['title'][$lang] ?></a></li>
        <?php endforeach; ?>
    </ul>

    <div class="nav-menu-right">
        <!-- Menu met social media logo's & verwijzingen in de header -->
    <ul class="social-menu">
        <a href="https://www.facebook.com/STEPtoGREENWORLD/"><li><i class="bx bxl-facebook"></i></li></a>
        <a href="https://twitter.com/ecogrow1"><li><i class="bx bxl-twitter"></i></li></a>
        <a href="https://www.instagram.com/ecogrow/"><li><i class="bx bxl-instagram"></i></li></a>
    </ul>
    <ul class="inbox">
        <a href=""><li><i class="bx bxs-inbox"></i></li></a>
        <a href=""><li><i class="bx bx-search"></i></li></a>
</ul>
    <!-- Keuzemenu waarmee de taal van de website mee kan worden aangepast -->
    <form action="" method="get">
        <select name="lang" onchange="location = '/ecogrow/' + '<?= $page; ?>' + '/' + this.value;">
            <option value="nl" <?= $lang === 'nl' ? 'selected' : '' ?>>Nederlands</option>
            <option value="en" <?= $lang === 'en' ? 'selected' : '' ?>>English</option>
        </select>
    </form>
</div>
    </section>
    <section class="linked-logo">
    <!-- Header die door het midden van kleur kan worden veranderd, a verwijst naar home als erop wordt geklikt - in de taal die is geselecteerd -->
    <a href="/ecogrow/home/<?= $lang; ?>"><i class='bx bxs-leaf'></i><h1>Eco<span>Grow</span> Solutions</h1></a></section>
</nav>
</header>
