<?php
/* 
Zadanie WIPING51
Wykonał: Marek Zydor

*/

$kczyd = readline("Kodowanie czy dekodowanie: ");
$napis = readline("Znaki: ");
$walidacja = true;

if($kczyd == "k")
{
	$czesci = [];
	$tablica = str_split($napis, 1);
	foreach ($tablica as $value) {
		$czesc = strval(decoct(ord($value)));
		if(strlen($czesc) == 2) $czesc = substr_replace($czesc, "0", 0, 0);
		if(strlen($czesc) == 1) $czesc = substr_replace($czesc, "00", 0, 0);
		$czesci[] = $czesc;
	}
$wynik = implode("", $czesci);
}
else if($kczyd == "d")
{
	if(strlen($napis) % 3 == 0)
	{
		$czesci = [];
		$tablica = str_split($napis, 3);

		foreach ($tablica as $value) {

			$ascii = octdec($value);

			if($ascii>=32 && $ascii<=126)
			{
				$czesci[] = chr($ascii);
			}else{
				$walidacja = false;
				break;
			}
		}
		$wynik = implode("", $czesci);

	}else $walidacja = false;

}else $walidacja = false;

if($walidacja==true) echo $wynik;
else echo "-1";
?> 
