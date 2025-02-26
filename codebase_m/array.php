
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            color:red;
        }
    </style>
</head>
<body>
  Studenten  overzicht
  <br>
  <?php
//$student1 ="Lisa";
//$student2 ="Bea";
//$student3 ="Yassira";


$studenten = array(
    array("Lisa",16, "Nieuwleusen"),
    array( "Bea" ,17, ""),
    array(  "Yassira",21, ""),
    array(  "Gloria",17,"Zwolle")
 );
 echo "<br> ";

 echo "<table>";
foreach ($studenten as $student) {
    echo "<tr>";
    echo "<td>Student naam = " . $student[0];
    echo "</td> ";
    echo "<td>Leeftijd =". $student[1];
    echo "</td> ";
    
    echo "<td>Woonplaats " . $student[2];
    echo "</td></tr> ";
}
echo "<table>";
//echo $student1 . " " .  $student2 . " " . $student3;






///pruklad 




$text="dbfkjdf";
echo strlen ($text);
echo strtoupper($text);



///tayemnii pismo 
$naam = "liza";
echo str_rot13($naam);

///1.loops(for while for each )
////2.condities ||-or  &&-and 
$leeftijd =18;
if($leeftijd >=18 && $leeftijd<67)
{
///true          &&        true
}
else{

}///functions 













?>

  
</body>
</html>

