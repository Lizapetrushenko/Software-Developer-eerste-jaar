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

  $select = $conn->query("SELECT * FROM gegevens WHERE id=$id");
  $row = $select->fetch_assoc();

  $name = $row["naam"];
  $adress = $row["adres"];
  $age = $row["leeftijd"];
  

  ?>

  <form method="post">
    <label for="name">Name: </label>
    <input id="name" type="text" name="name" value="<?=$name?>" required>
    <label for="adress">Adress: </label>
    <input id="adress" type="text" name="adress" value="<?=$adress?>" required>
    <label for="age">Age: </label>
    <input id="age" type="text" name="age" value="<?=$age?>" required>
    <input type="submit" name="update" value="update">
  </form>


  <?php 
 
  
  
  
  if (isset($_POST['update'])) {
      
      $name = $_POST['name'];
      $adress = $_POST['adress'];
      $age = $_POST['age'];
  
      $query = "UPDATE gegevens SET naam = '".$name."',
      adres = '".$adress."',
      leeftijd = '".$age."'
      WHERE id=$id";
$stmt = $conn->prepare($query);
$stmt->execute();
header("location: index.php?page=read");
  }
?>
</body>
</html>