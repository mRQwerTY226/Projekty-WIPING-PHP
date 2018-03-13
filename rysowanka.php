<?php
$ltestow = readline("Liczba testów: ");
$wynik = [];
for ($t=0; $t < $ltestow; $t++) { 

${"lodc$t"} = readline("Liczba odcinków: ");
for ($i=0; $i < ${"lodc$t"}; $i++) { 
	$wspol = readline("Współrzędne $i: ");
	${"w$i$t"} = explode(" ", $wspol);
}
}
for ($t=0; $t < $ltestow; $t++) { 
$walidacja = true;

if(${"lodc$t"}>1)
{
for($i=0; $i < ${"lodc$t"}-1; $i++)
{
	$w = $i+1;
	if(${"w$i$t"}[2].${"w$i$t"}[3] != ${"w$w$t"}[0].${"w$w$t"}[1])
	{
		$walidacja = false;
	}
}
}
if($walidacja==true) $wynik[] = "TAK";
else $wynik[] = "NIE";
}
echo implode("\n", $wynik);