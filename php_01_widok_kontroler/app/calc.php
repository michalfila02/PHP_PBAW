<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$a = isset($_REQUEST ['a']) ? $_REQUEST ['a'] : NULL;
$b = isset($_REQUEST ['b']) ? $_REQUEST ['b'] : NULL;
$c = isset($_REQUEST ['c']) ? $_REQUEST ['c'] : NULL;

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($x) && isset($y) && isset($c))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $a == "") {
	$messages [] = 'Nie podano liczby a';
}
if ( $b == "") {
	$messages [] = 'Nie podano liczby b';
}
if ( $c == "") {
	$messages [] = 'Nie podano liczby c';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $a )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $b )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $c )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$a = intval($a);
	$b = intval($b);
	$c = intval($c);
	//wykonanie operacji
	$delta = $b * $b - 4*$a*$c;  
	$delta = $delta^(1/2);
	if($delta==0){
		$result[]=-$b/(2*a);
	}
	else if($delta>0){
		$result[]=(-$b+$delta)/2*a;
		$result[]=(-$b-$delta)/2*a;
	}
	else {
		$result[]='Brak wartości x spełnijących warunek';
	}
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';