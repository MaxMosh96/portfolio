<?php

	$string1 = 'During 2014 and 2015, a new major PHP version was developed, which was numbered PHP 7. The numbering of this version involved some debate. While the PHP 6 Unicode experiment had never been released, several articles and book titles referenced the PHP 6 name, which might have caused confusion if a new release were to reuse the name. After a vote, the name PHP 7 was chosen.';
	$string2 = 'Verschillende onderdelen die in versie 6 zouden komen, zijn naar versies 5.3 overgezet. Andere aanpassingen zoals traits en closure re-binding zijn in PHP 5.4 terecht gekomen. Om verwarring te voorkomen over de oorspronkelijk beoogde versie 6 (bijvoorbeeld boeken die al geschreven werden) en de werkelijke opvolger van de PHP 5-tak, werd besloten om door te nummeren bij 7.';
	$string3 = 'La nouvelle version propose une optimisation du code et, d\'après la société Zend, offre des performances dépassant celles de machines virtuelles comme HHVM. Les benchmarks externes montrent des performances similaires pour HHVM et PHP 7, avec un léger avantage d\'HHVM dans la plupart des scénarios.';
	$string4 = 'Nach einer Diskussion darüber, ob die nächste PHP-Version den Namen des ehemals gescheiterten PHP 6 wiederaufnehmen soll, oder stattdessen eine Versionsnummer überspringen und PHP 7 heißen soll, wurde am 29. Juli 2014 bekanntgegeben, dass die Entwickler sich mit 58 zu 24 Stimmen für die Hauptversionsnummer 7 entschieden haben. Der Nachfolger von PHP 5 heißt somit offiziell PHP 7.';
	$string5 = 'Standardfunktionen';

// Strings converteren naar hoofdletters met speciale behandeling van 'ß'
$string1 = mb_strtoupper($string1, 'UTF-8');
$string2 = mb_strtoupper($string2, 'UTF-8');
$string3 = mb_strtoupper($string3, 'UTF-8');
$string4 = str_replace('ß', 'SS', mb_strtoupper($string4, 'UTF-8'));
$string5 = mb_strtoupper($string5, 'UTF-8');

$strings = array($string1, $string2, $string3, $string4, $string5);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$string5;?></title>
	</head>
	<body>
		<div id="container">
			<?php
				echo '<p>'.$string1.'</p>';
				echo '<p>'.$string2.'</p>';
				echo '<p>'.$string3.'</p>';
				echo '<p>'.$string4.'</p>';
			?>
		</div>
	</body>
</html>