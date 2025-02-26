<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Piramide Teken Programma</title>
</head>
<body>
    <h1>Piramide Teken Programma</h1>

    <form method="POST">
        <label for="basis">Wat is de basis van de piramide? </label>
        <input type="number" id="basis" name="basis">
        <input type="submit" value="Teken Piramide">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $basis = intval($_POST['basis']);
        if ($basis % 2 == 0) {
            echo "<p>De basis moet een oneven getal zijn.</p>";
        } else {

            $hoogte = ($basis + 1) / 2;

            
            echo "<pre>";
            for ($i = 0; $i < $hoogte; $i++) {
                $sterretjes = 2 * $i + 1;
                $spaties = ($basis - $sterretjes) / 2;
                echo str_repeat(" ", $spaties) . str_repeat("*", $sterretjes) . "\n";
            }
            echo "</pre>";
        }
    }
    ?>
</body>
</html>

