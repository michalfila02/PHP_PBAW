<?php

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<title>Kalkulator</title>
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post">
	<label for="id_a">Liczba a: </label>
	<input id="id_a" type="text" name="a" value="<?php out($a) ?>" />
	<label for="id_b">Liczba b: </label>
	<input id="id_b" type="text" name="b" value="<?php out($b) ?>" />
	<label for="id_c">Liczba c: </label>
	<input id="id_c" type="text" name="c" value="<?php out($c) ?>" />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($result)) {
	if (count ( $result ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		echo 'Wynik:';
		foreach ( $result as $key => $res ) {
			echo '<li>'.$res.'</li>';
		}
		echo '</ol>';
	}
}
?>
</body>
</html>