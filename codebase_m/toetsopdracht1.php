<?php
$lengte = array();
$hoeveelgroter = 0;
$hoeveelkleiner = 0;

for ($i=0; $i < 5 ; $i++) { 
    $lengte[] = readline( $i+1 . " Geef de lengte ");
    if( $lengte [$i] > 200 || $lengte[$i] <50 ) {
        echo "\nBuiten de range ";
        $lengte [$i] = readline($i+1 . " Geef de lengte "); 
    }
    if ( $lengte [$i] >170 ){
        $hoeveelgroter++;
    }
    elseif ($lengte[$i] <170) {
        $hoeveelkleiner++;
    }
}

echo "\nEr zijn er zoveel groter dan 170: " . $hoeveelgroter ;
echo "\nEr zijn er zoveel kleiner dan 170: " . $hoeveelkleiner;




$gemiddelde = array_sum ($lengte)/ count ($lengte); 
echo "\nDit is het gemiddelde:" . $gemiddelde

?>