<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  if (isset($_GET['id'])) 
  {
      $id = $_GET['id'];
  }

  $select = $conn->query("SELECT * FROM voetballers WHERE id=$id");
  $row = $select->fetch_assoc();

  $voornaam = $row["voornaam"];
  $achternaam = $row["achternaam"];
  $geboortedatum = $row["geboortedatum"];
  

  ?>

  <form method="post">
    <label for="naam">Voornaam: </label>
    <input id="naam" type="text" name="voornaam" value="<?=$voornaam?>" required><br>
    <label for="achternaam">Achternaam: </label>
    <input id="achternaam" type="text" name="achternaam" value="<?=$achternaam?>" required><br>
    <label for="geboortedatum">Geboortedatum: </label>
    <input id="geboortedatum" type="date" name="geboortedatum" value="<?=$geboortedatum?>" required><br>
    <input type="submit" name="update" value="update">
  </form>


  <?php 
 
  
  
  
  if (isset($_POST['update'])) {
      
      $voornaam = $_POST['voornaam'];
      $achternaam = $_POST['achternaam'];
      $geboortedatum = $_POST['geboortedatum'];
  
      $query = "UPDATE voetballers SET voornaam = '".$voornaam."',
      achternaam = '".$achternaam."',
      geboortedatum = '".$geboortedatum."'
      WHERE id=$id";
$stmt = $conn->prepare($query);
$stmt->execute();
header("location: index.php?page=home");
  }
?>
</body>
</html>