<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide Tekenprogramma</title>
</head>
<body>

<h1>Piramide Tekenprogramma</h1>
<form method="post">
    <label for="stapels">Aantal stapels stenen:</label>
    <input type="number" name="stapels">
    <input type="submit" value="Teken Piramide">
</form>

<?php
    $stapels = (int)$_POST['stapels'];
     for ($i = 1; $i <= $stapels; $i++) {
        echo "<br>";
        echo str_repeat(" ", $stapels - $i);
        echo str_repeat("*", (2 * $i - 1));
    
    }

    echo "</div>";

?>

</body>
</html>
