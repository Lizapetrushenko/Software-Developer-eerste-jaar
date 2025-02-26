<?php
  $studenten = readline ("Voer studentnummer  in: ");
$studenten = array(
    97123456 =>  "Klaas",
    97234563 =>  "Achmed ",
    97442233 =>  "Janien",
    97766601 =>  "Rene",
 );
  
foreach ( $studenten as $nummer => $naam){
    echo $nummer . $naam . "\n";
} 
?>
