<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naam</title>
</head>
<body>
    <form>
       Naam: <input type= "text" name = "achternaam">
        <input type ="submit">
</form> 
<?php 
$naam = $_GET['achternaam'];
echo "<br>";
echo $naam;



?>
</body>
</html>
