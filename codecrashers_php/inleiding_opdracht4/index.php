<?php
	date_default_timezone_set('America/Curacao');
	$datum = date('d-m-Y');
	$tijd = date('H:i:s');

	// Extra informatie toevoegen
	$weeknummer = date('W'); // Het nummer van de huidige week in het jaar
	$dagen_in_maand = date('t'); // Hoeveel dagen de huidige maand heeft
	$am_pm = date('A'); // 'AM' of 'PM'
	$verschil_tijdzones = date('Z') / 3600; // Het verschil in uren tussen GMT en de ingestelde timezone
	$seconden_sinds_1970 = time(); // Het aantal seconden sinds 00:00:00 op 1 januari 1970

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Datum & Tijd</title>
		<style>
			html, body {
				font-family: Arial, sans-serif;
				font-size: 24px;
				color: brown;
				background-color: orange;
			}
		</style>
	</head>
	<body>
		<header>
			<p>Het is nu <?=$tijd;?> op <?=$datum;?>.</p>
		</header>
		<section>
			<!-- Plaats in deze sectie je opgehaalde eigenschappen van opdracht 4.3 -->
			<p>Weeknummer: <?php echo $weeknummer; ?></p>
			<p>Dagen in de maand: <?php echo $dagen_in_maand; ?></p>
			<p>AM of PM: <?php echo $am_pm;	?></p>
			<p>Verschil tijdzones: <?php echo $verschil_tijdzones; ?>uur</p>
			<p>Seconden sinds 1970: <?php echo $seconden_sinds_1970; ?></p>
		</section>
	</body>
</html>