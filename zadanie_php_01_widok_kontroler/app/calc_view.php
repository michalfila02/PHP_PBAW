<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_a">Liczba a: </label>
	<input id="id_a" type="text" name="a" value="<?php if(isset($a))print($a); ?>" /><br />
	<label for="id_b">Liczba b: </label>
	<input id="id_b" type="text" name="b" value="<?php if(isset($b))print($b); ?>" /><br />
	<label for="id_c">Liczba c: </label>
	<input id="id_c" type="text" name="c" value="<?php if(isset($c))print($c); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ 
	if (count ( $result ) > 0) {
		echo '<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">';
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