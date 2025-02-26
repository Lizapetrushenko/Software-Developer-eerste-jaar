<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Voeg een record toe aan de tabel cities</h1>
    <from>
    <label for="contry">Land:</label><input type="text" name="contry" id="contry"><br>
    <label for="lcode">Platsnaam:</label> <input type="text" name="lcode" id="lcode"><br>
    <label for="wcode">Werelddeel:</label><input type="text" name="wcode" id="wcode"><br>
    <input type="submit" name="submit">
    </from>
    <?php
//1/form moet je gaan uitlezen
if(!isset($_GET['submit']))
{
    return;
}
///we weten of dat geklikt is of niet
$contry = $_GET['contry'];
$lcode = $_GET['lcode'];
$wcode = $_GET['wcode'];
///2/ connectie met database
$conn= mysqli_connect("localhost", "root" , "" , "wereld");
//3/insert actie van de formuliergegevens in de tabel
$sql= "INSERT INTO land ('landnaam', 'landcode', 'werelddeelcode') VALUES ('$contry','$lcode','wcode');"; 
if(mysqli_query($conn,$sql)){
    echo "Toegevoegd";
    header('Location: index.php?page=select');
}
else{
    echo 'Dit ging fout';
}
//4/ klaar (connectie sluiten ).
mysqli_close($conn);

?>
</body>
</html>