<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lotto</title>
    <style>
     input[type = number]
     {
        width: 30px;
     }
    

    </style>
</head>
<body style="text-align:center;background-color: lightblue;"> 
<h1>Lotto</h1>
<form>
<label>Schrijf 6 cijfers tussen 1 en 42</label>
<input type="number" name ="number1">
<input type="number" name ="number2">
<input type="number" name ="number3">
<input type="number" name ="number4">
<input type="number" name ="number5">
<input type="number" name ="number6">
<input type="submit"><br>

</form>
 <?php

$number = [];
$aantalnumber= 6;

foreach ($_GET as $value) {
 if($value =="")
 {
echo"<h2>Voer een getal in!</h2><br>";
return;
 }
 if ($value <2 || $value >41)  {
    echo "Voer een getal in tussen 1 en 42";
    return;
 }
 $number[] = $value;

}
sort($number);
echo "Je gekozen cijvers zijn: ";
foreach($number as $value)
{
    echo"$value ";
}
echo"<br>";
$random_number = [];


for ($i=0; $i < count(value:$number); $i++) { 
    $random_number[$i]= rand(min:2 , max:41);
}
sort($random_number);
echo "De trekkingscijvers zijn: ";
foreach ($random_number as $value) {
    echo"$value ";
}
echo "<br>";
if (count($number)== $aantalnumber) {
    $aantal_juiste_number = 0;
    foreach ($number as $getal){
        if(in_array($getal,$random_number)){
            $aantal_juiste_number++;
        }
    }


$gewonnenprijs;
if ($aantal_juiste_number <3){
    $gewonnenprijs = 0;
    echo"Je hebt $gewonnenprijs euro gewonnen";
}
else if ($aantal_juiste_number==3){

$gewonnenprijs = 10;
    echo"Je hebt $gewonnenprijs euro gewonnen";
}
else if ($aantal_juiste_number==4){
$gewonnenprijs = 1000;
    echo"Je hebt $gewonnenprijs euro gewonnen";
}
else if ($aantal_juiste_number==5){
    $gewonnenprijs = 100000;
    echo"Je hebt $gewonnenprijs euro gewonnen";
}
else if ($aantal_juiste_number==6){
    $gewonnenprijs = 10000000;
    echo"Je hebt $gewonnenprijs euro gewonnen";
}
}
?>
</body>
</html>