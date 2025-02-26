<form method="post" >

            <label>Voornaam</label><br>
            <input type="text" placeholder="Naam" name="voornaam"><br>
            <label>Achternaam</label><br>
            <input type="text" placeholder="Achternaam" name="achternaam"><br>
            <label>Geboortedatum</label><br>
            <input type="date" name="geboortedatum"><br>
            <input type="submit" name="submit" value="Verzenden"><br>
</form><br>


<?php
if (isset($_POST['submit'])) {

    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $geboortedatum = $_POST['geboortedatum'];
    $query = "INSERT INTO voetballers (voornaam, achternaam, geboortedatum) VALUES ('$voornaam', '$achternaam', '$geboortedatum')";
    echo $query;
    if ($conn->query($query) === TRUE) {
        header("location: index.php?page=home");

    }


}

?>