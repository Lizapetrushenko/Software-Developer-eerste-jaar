<form method="post" >
            <label>Naam</label><br>
            <input type="text" placeholder="Naam" name="naam"><br>
            <label>Adres</label><br>
            <input type="text" placeholder="adres" name="adres"><br>
            <label>Leeftijd</label><br>
            <input type="number" name="leeftijd"><br>
            <input type="submit" name="submit" value="Verzenden"><br>
</form><br>


<?php
if (isset($_POST['submit'])) {

    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $leeftijd = $_POST['leeftijd'];
    $query = "INSERT INTO gegevens (naam, adres, leeftijd) VALUES ('$naam', '$adres', '$leeftijd')";
    echo $query;
    if ($conn->query($query) === TRUE) {
        header("location: index.php?page=read");

    }


}

?>
