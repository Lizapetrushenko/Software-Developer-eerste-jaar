<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do list met PHP, PDO en een MySQL database</title>
    <style>
        h1 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            border: 1px solid pink;
            width: 20%;
        }
        td{
            display: flex;
            flex-direction: column;
            border:solid 1px black;
        }
    </style>
</head>
<?php

// Variabelen met gegevens voor database
$servername = "localhost";
$dbname = "list";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>



<body>
    <h1>ToDo-List</h1>

    <!-- Formulier om een taak te versturen naar de database en in de taak tabel -->
    <form method="post" action="create.php">
        <input type="text" placeholder="Naam" name="naam"><br>
        <input type="text" placeholder="Taakomschrijving" name="taakomschrijving"><br>
        <input type="date" name="deadline"><br>
        <input type="submit" name="submit" value="Verzenden"><br>
    </form><br>

</body>
</html>