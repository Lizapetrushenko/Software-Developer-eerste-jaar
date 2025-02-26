<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .studenten
        {
            border : solid 1px green;
            font-family: "Tahoma";
        }    
        tr:nth-child(even) {background: #CCC}
        tr:nth-child(odd) {background: #EEE}
 
 
    </style>
 
</head>
<body>
    <h1>KlasseApp</h1>
   
    <?php
 
        // 1. Connect
        $con = mysqli_connect("localhost", "root", "", "klasapp");
        // wel checken of het gelukt is, anders niet doorgaan natuurlijk!!!!!!
 
        // 2. Stel een vraag
        $res = mysqli_query($con, "SELECT * FROM studenten");
 
        // 3. Haal de resultaten op.
        // je krijgt altijd records maar je weet niet hoeveel. => loop?
        // welke type loop => while?
       
        echo "<table class=\"studenten\">";
        while ( $row = mysqli_fetch_assoc($res))
        {  
            echo "<tr>";
           
            echo "<td>" . $row['voornaam'] . "</td>";
            echo "<td>" . $row['achternaam'] . "</td>";
            echo "<td>" . $row['plaats'] . "</td>";
           
 
            echo "</tr>";
 
        }
        echo "</table>";
 
 
        //4 connectie sluiten.
        mysqli_close($con);
 
    ?>
</body>
</html>