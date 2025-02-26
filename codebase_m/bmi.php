<!DOCTYPE html>
<html lang="nl">
<head>
    <title>BMI Calculator</title>
</head>
<body>

<h1>BMI Calculator</h1>

<form method="get">
    <label for="gewicht">Gewicht (in kg): </label>
    <input type="number" name="gewicht">
    <br><br>

    <label for="lengte">Lengte (in cm): </label>
    <input type="number" name="lengte">
    <br><br>

    <input type="submit" value="Bereken BMI">
</form>

<?php
if (isset($_GET['gewicht']) && isset($_GET['lengte'])) {

    $gewicht = (float) $_GET['gewicht'];
    $lengte = (float) $_GET['lengte'];

    if ($gewicht > 0 && $lengte > 0) {
    
        $lengteInMeters = $lengte / 100;
        $bmi = $gewicht / ($lengteInMeters * $lengteInMeters);

        $bmi = round($bmi, 2);

    
        echo "<h2>Je BMI is: $bmi</h2>";
        
        if ($bmi < 18.5) {
            echo "<p>Je hebt ondergewicht.</p>";
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            echo "<p>Je hebt een gezond gewicht.</p>";
        } elseif ($bmi >= 25 && $bmi < 30) {
            echo "<p>Je hebt overgewicht.</p>";
        } else {
            echo "<p>Je hebt ernstig overgewicht (obesitas).</p>";
        }
    } else {
        echo "<p>Voer een geldig gewicht en lengte in.</p>";
    }
}
?>

</body>
</html>
