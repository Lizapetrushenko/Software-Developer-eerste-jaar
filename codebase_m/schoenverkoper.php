<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schoen Verkoper</title>
</head>
<body>
    <form method="post" action="">
        Heb je een klantenkaart? (ja/nee): 
        <input type="text" name="kaart" required><br><br>

        Hoeveel paar schoenen wil je kopen?: 
        <input type="number" name="schoenen" required><br><br>

        <input type="submit" value="Verzenden"><br>
    </form> 

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kaart = $_POST['kaart'];
        $schoenen = $_POST['schoenen'];

        if ($schoenen == 2) {
            echo "Prijs: 100 euro<br>";
        } elseif ($schoenen > 2) {
            echo "Prijs: " . (50 * $schoenen) . " euro<br>";
        } elseif ($schoenen == 1) {
            echo "Prijs: 50 euro<br>";
        }

    
        if (strtolower($kaart) == "ja") {
            echo "Je hebt recht op een korting van 10%!";
        } else {
            echo "Je hebt geen klantenkaart.";
        }
    }
    ?>
</body>
</html>
