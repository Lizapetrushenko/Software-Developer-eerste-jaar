<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diamant tekenen</title>
</head>
<body>

<form method="get">
    Geef de omvang van de diamant: 
    <input type="number" name="diamant">
    <input type="submit" value="Tekenen">
</form>

<div style="text-align:center;">
<?php
if (isset($_GET['diamant'])) {
    $size = (int) $_GET['diamant'];

    if ($size > 0) {
        
        for ($i = 1; $i <= $size; $i++) {
            echo str_repeat(" ", $size - $i);
            echo str_repeat("* ", $i);
            echo "<br>";
        }
        
    
        for ($i = $size - 1; $i > 0; $i--) {
            echo str_repeat(" ", $size - $i);
            echo str_repeat("* ", $i);
            echo "<br>";
        }
    } else {
        echo "Voer een geldige omvang in.";
    }
}
?>
</div>

</body>
</html>
