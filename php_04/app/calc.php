<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów
function getParams(&$a,&$b,&$c){
$a = isset($_REQUEST ['a']) ? $_REQUEST ['a'] : null;
$b = isset($_REQUEST ['b']) ? $_REQUEST ['b'] : null;
$c = isset($_REQUEST ['c']) ? $_REQUEST ['c'] : null;
}
// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
function validate(&$a,&$b,&$c,&$messages){
	
	if ( ! (isset($a) && isset($b) && isset($c))) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $a == "") {
		$messages [] = 'Nie podano współczynnika a';
	}
	if ( $b == "") {
		$messages [] = 'Nie podano współczynnika b';
	}
	if ( $c == "") {
		$messages [] = 'Nie podano współczynnika c';
	}
	if (count ( $messages ) != 0) return false;
		

	//nie ma sensu walidować dalej gdy brak parametrów
	
	// sprawdzenie, czy $a, $b i $c są liczbami całkowitymi
	if (! is_numeric( $a )) {
		$messages [] = 'Wartość współczynnika "a" nie jest liczbą całkowitą';
	}
	if ( $a == 0 ) {
		$messages [] = 'Wartość współczynnika "a" jest równa zero, ergo jest to funkcja liniowa';
	}
	if (! is_numeric( $b )) {
		$messages [] = 'Wartość współczynnika "b" nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $c )) {
		$messages [] = 'Wartość współczynnika "c" nie jest liczbą całkowitą';
	}
	if (count ( $messages ) != 0) return false;
	else return true;
}
// 3. wykonaj zadanie jeśli wszystko w porządku
function process(&$a,&$b,&$c,&$messages,&$result)
{
	
	//konwersja parametrów na int
	$a = intval($a);
	$b = intval($b);
	$c = intval($c);
	//obliczenie delty
	$delta = (($b ** 2) - (4*$a*$c));  //algorytm liczenia X na podstawie delty

	if($delta == 0){ 
		 $result[]="Delta: " . $delta;  // dodanie delty do tablicy wynikowej
		
		$result[]="X: ". (-$b) / (2*$a); // dodanie obliczonego X do tablicy wynikowej
	}
	else if($delta > 0){ 
	
		$result[] = "Delta: " . $delta;
			$delta = $delta ** (1/2);	
			$result[] = "X1: " . (-$b+$delta) / (2*$a);
			$result[] = "X2: " . (-$b-$delta) / (2*$a);
	
	}
	else {
	
		$result[] = 'Brak rzeczywistych wartości x spełnijących warunek'; // dodanie komunikatu wobec (ax^2+bx+c) != 0 do tablicy wynikowej
		
			$result[] = "Delta: " . $delta;
			$delta = -$delta;
			$delta = $delta ** (1/2);	
			$result[] = "X1: " . (-$b) / (2*$a) ."+" . ($delta) / (2*$a) . "i";
			$result[] = "X2: " . (-$b) / (2*$a) ."-" . ($delta) / (2*$a) . "i";
		
	}
}


$a = null;
$b = null;
$c = null;
$result = array();
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($a,$b,$c);
if ( validate($a,$b,$c,$messages) ) { // gdy brak błędów
	process($a,$b,$c,$messages,$result);
}
// 4. Wywołanie widoku z przekazaniem zmiennych

include dirname(__FILE__).'/calc_view.php';
?>