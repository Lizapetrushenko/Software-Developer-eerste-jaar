<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tafels</title>
</head>
<body>

<form>
Voer in cijfer:<input type="number" name= "tafel"><br>
Voer begin in: <input type="number" name="begin"><br>
Voer eind in: <input type="number" name="eind"><br>
<input type="submit" name="verzonden"><br>
</form>
<div style="text-align:right; border:1px solid black;">
<?php


if (isset( $_GET['tafel']) && isset( $_GET['begin']) && isset( $_GET['eind']))
{

    $tafel =  $_GET['tafel'];
    $begin =  $_GET['begin'];
    $eind = $_GET['eind'];    

    echo "Tafel van $tafel van $begin tot $eind: <br>";
    for ($i = $begin; $i<=$eind; $i++)
    {
        echo "$tafel x $i = " . ($tafel * $i) . "<br>";
    }
}
else
{
    return;
}

?>
</div>
</body>
</html>