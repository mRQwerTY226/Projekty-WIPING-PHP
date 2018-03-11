<?php

/*
Zadanie WIPING50 - Obraz całkowy
Wykonał: Marek Zydor kl. 2TIW
*/

$doz = readline("Ile wierszy i kolumn: ");				// Wczytuje liczbę wierszy i kolumn dla obrazu źródłowego np. 3 4
$pixele = readline("Pixele obrazu źródłowego: ");		// Pixele obrazu źródłowego: np. 1 2 1 3 4 5 1 2 3 2 6 1
$lkw = readline("Liczba współrzędnych: ");				// Liczba współrzędnych do sprawdzenia np. 3
$kw = readline("Współrzędne: ");						// Współrzędne: np. 2 3 0 2 1 3 - czyli (2, 3), (0, 2), (1, 3)

$lwierszydoz = substr($doz, 0, 1);				//Do zmiennej lwierszydoz zostaje wpisana liczba wierszy obrazu źródłowego, np 3
$lkolumndoz = substr($doz, 2, 1);				// Analogicznie jak do lwierszydoz, np. 4
$kw = str_replace(" ", "", $kw);				// usuwanie spacji z współrzędnych, np. 230213

for($i=0; $i<$lkw; $i++)						// W tej pętli poszczególne współrzędne zostają wpisane do zmiennych o 	
{												// nazwach odpowiednio: kw0, kw1, kw2 itd.
	${"kw$i"} = substr($kw, $i*2, 2);
}


$tpixeli = explode(" ", $pixele);				// każdy pixel zostaje zapisany do tablicy o nazwie tpixeli
$oc = [];										// Ta tablica będzie służyć jako obraz źródłowy
$x = 0;
for($w=0; $w<$lwierszydoz; $w++)				// w tej pętli zostaje utworzony obraz źródłowy
{
	for($k=0; $k<$lkolumndoz; $k++)
	{
		$oc[$w.$k] = $tpixeli[$x++];
	}
}

$wynik = "";

for ($i=0; $i < $lkw; $i++) { 					// pętla wykona się tyle razy ile podaliśmy par współrzędnych, np. 3 razy

${"wynik$i"} = 0;								// W zmiennych np. wynik0, wynik1 itd. będzie wpisany wynik dla poszczególnych													 współrzędnych
	foreach ($oc as $key => $value) 
	{
		${"wynik$i"} += $value;					// każdy pixel zostaje dodany do wyniku dopóki współrzędne obrazu źródłowego nie 
		if($key==${"kw$i"}) break;				// będą takie same jak współrzędne podane na wejściu
	}

	$wynik .= ${"wynik$i"}." ";					// łączenie wyników w jedną zmienną, które oddzielone są spacją
}
echo substr($wynik, 0, -1);						// wypisanie wyniku bez końcowej spacji