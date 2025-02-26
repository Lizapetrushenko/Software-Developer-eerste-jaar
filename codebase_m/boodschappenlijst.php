<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lijst</title>
</head>
<body>
    <form>
<label for = "aantal"> Hoeveel producten wilt u kopen ?: </label>
<input id= "aantal" type ="number" name ="aantal">
<input type ="submit" name ="verzenden"><br>


</form>

<form>
<?php
if (!isset($_GET['verzenden'])){
    $_SESSION["aantal"] = $_GET["aantal"];
    $aantal_producten = $_SESSION["aantal"];

}

$aantal = $_GET['aantal'];
for ($i=0; $i <$aantal ; $i++) { 
echo "<input type ='text' name = 'product'" . "$i + 1" . "<br>";

}
echo "<input type='submit' ><br>";

?> 

</form>
</body>
</html>
