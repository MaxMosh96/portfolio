<?php
$menu = array(
    array('text' => 'Home', 'href' => 'index.php', 'target' => '_self', 'order' => 1, 'active' => true),
    array('text' => 'History', 'href' => 'history.php', 'target' => '_self', 'order' => 4, 'active' => true),
    array('text' => 'About', 'href' => 'about.php', 'target' => '_self', 'order' => 3, 'active' => true),
    array('text' => 'Search', 'href' => 'http://google.nl', 'target' => '_blank', 'order' => 7, 'active' => true),
    array('text' => 'News', 'href' => 'news.php', 'target' => '_self', 'order' => 2, 'active' => true),
    array('text' => 'Contact', 'href' => 'contact.php', 'target' => '_self', 'order' => 5, 'active' => true),
    array('text' => 'More', 'href' => 'more.php', 'target' => '_self', 'order' => 6, 'active' => true)
);
?>
<?php
usort($menu, function($a, $b) {
    return $a['order'] - $b['order'];
});
?>

<?php
          $completemenu = '' ;
            foreach ($menu as $item) {
                if ($item['active']) {
                    $completemenu .= '<div class="menu-item"><a class="menu-link" href="' . $item['href'] . '" target="' . $item['target'] . '">' . $item['text'] . '</a></div>';
                }
            }


?>