<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>artisten</h1>

    <h2>Insert artiest</h2>
    <h3>Nieuwe artiest invoeren</h3>
    <label>Naam: </label><input type="text" name="name"><br>
    <label>Land:  </label><input type="text" name="contry"><br>
    <input type="submit" name="submit">

    <?php
if(!isset($_GET['submit']))
{
    return;
}
$naam = $_GET['name'];
$contry = $_GET['contry'];
$conn= mysqli_connect("localhost", "root" , "" , "top2000");
$sql= "INSERT INTO artist ('name', 'contry') VALUES ('$contry','$name');"; 
if(mysqli_query($conn,$sql)){
    echo " '$naam' uit '$contry' is ingevoerd" ;
    header('Location: select.php');
}
else{
    echo 'Dit ging fout';
}
mysqli_close($conn);

?>
</body>
</html>