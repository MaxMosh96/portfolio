<?php
$pages = array(
    'home' => array(
        'title' => array(
            'nl' => 'Home',
            'en' => 'Home',
            'pl' => 'Dom'
        ),
        'content' => array(
            'nl' => 'Welkom op onze website. Het is een leuke website.',
            'en' => 'Welcome to our website. It is a nice website.',
            'pl' => 'Witamy na naszej stronie internetowej. To miła strona internetowa.'
        )
    ),
    'about' => array(
        'title' => array(
            'nl' => 'Over ons',
            'en' => 'About us',
            'pl' => 'O nas'
        ),
        'content' => array(
            'nl' => 'Er is niet echt veel te zeggen.',
            'en' => 'There\'s really not a whole lot to say.',
            'pl' => 'Nie ma wiele do powiedzenia.'
        )
    ),
    'info' => array(
        'title' => array(
            'nl' => 'Informatie',
            'en' => 'Information',
            'pl' => 'Informacja'
        ),
        'content' => array(
            'nl' => 'Ga maar naar Wikipedia als je informatie nodig hebt.',
            'en' => 'Just go to Wikipedia if you want information.',
            'pl' => 'Po prostu przejdź do Wikipedii, jeśli chcesz uzyskać informacje.'
        )
    ),
    'contact' => array(
        'title' => array(
            'nl' => 'Contactpagina',
            'en' => 'Contact page',
            'pl' => 'Strona kontaktowa'
        ),
        'content' => array(
            'nl' => 'U kunt ons momenteel helaas niet contacteren.',
            'en' => 'Unfortunately you can\'t contact us right now.',
            'pl' => 'Niestety nie możesz się teraz z nami skontaktować.'
        )
    ),
    'notfound' => array(
        'title' => array(
            'nl' => 'Pagina niet gevonden',
            'en' => 'Page not found',
            'pl' => 'Strona nie znaleziona'
        ),
        'content' => array(
            'nl' => 'Deze pagina bestaat niet. Probeer het nog eens.',
            'en' => 'This page doesn\'t exist. Please try again.',
            'pl' => 'Ta strona nie istnieje. Proszę spróbuj ponownie.'
        )
    )
);

// Controleren of de pagina bestaat
if (isset($_GET['page']) && isset($_GET['lang'])) {
    $page = $_GET['page'];
    $lang = $_GET['lang'];

    if (array_key_exists($page, $pages) && array_key_exists($lang, $pages[$page]['title'])) {
        $title = $pages[$page]['title'][$lang];
        $content = $pages[$page]['content'][$lang];
    } else {
        // Als de pagina niet bestaat, toon de 'notfound'-pagina
        $title = $pages['notfound']['title'][$lang];
        $content = $pages['notfound']['content'][$lang];
    }
} else {
    // Als er geen pagina is opgegeven, toon de 'home'-pagina standaard
    $title = $pages['home']['title']['nl'];
    $content = $pages['home']['content']['nl'];
}
?>

