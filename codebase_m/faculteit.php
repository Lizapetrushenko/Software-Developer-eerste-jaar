<!DOCTYPE html>
<html>
<head>
    <title>Faculteit Berekening</title>
</head>
<body>
    <form>
        <input type="number" name="getal"><br>
        <input type="submit" value="Berekenen" name="submitted">  
    </form>

    <?php 
    if (!isset($_GET['submitted'])){
        return;
    }
    $getal = $_GET['getal'];
    if (!is_numeric($getal)){
        echo "<h1>Dat is geen getal</h1>";
        return;
    }
    if ($getal <0 ){
        echo "Ongeldig invoer, invoer moet groter dan 0 zijn.";
    }
    $resultaat = 1;
    
    for ($i=1; $i <= $getal; $i++){
        echo $i . "x" . $resultaat . "=";
        $resultaat = $i * $resultaat;
        echo $resultaat . "<br>";
    }
    echo "<br> Het resultaat is :";
    echo $resultaat;
    ?>
</body>
</html>
