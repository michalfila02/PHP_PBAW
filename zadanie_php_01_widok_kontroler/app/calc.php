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
if ( ! (isset($a) && isset($b) && isset($c))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $a, $b i $c są liczbami całkowitymi
	if (! is_numeric( $a )) {
		$messages [] = 'Wartość współczynnika "a" nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $b )) {
		$messages [] = 'Wartość współczynnika "b" nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $c )) {
		$messages [] = 'Wartość współczynnika "c" nie jest liczbą całkowitą';
	}

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
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
	
		$result[] = 'Brak rzeczywisteych wartości x spełnijących warunek'; // dodanie komunikatu wobec (ax^2+bx+c) != 0 do tablicy wynikowej
	
	}
}

// 4. Wywołanie widoku z przekazaniem zmiennych

include 'calc_view.php';