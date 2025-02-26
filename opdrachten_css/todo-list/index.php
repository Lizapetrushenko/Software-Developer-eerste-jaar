
<!DOCTYPE html>
<html>
<head>
    <title>To-do list met PHP, PDO en een MySQL database</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <!-- Formulier om een taak te versturen naar de database en in de taak tabel -->
     <div id="content">
    
    <form method="post" action="create.php">
        <label>Naam</lebel><br>
        <input type="text" placeholder="Naam" name="naam"><br>
        <label>Taakomschrijving</label><br>
        <input type="text" placeholder="Taakomschrijving" name="taakomschrijving"><br>
        <label>Deadline</label><br>
        <input type="date" name="deadline"><br>
        <input type="submit" name="submit" value="Verzenden"><br>
    </form><br>

    <!-- Kopieer code van read.php naar dit bestand -->
    <?php include 'read.php'; ?>
</div>
</body>
</html>