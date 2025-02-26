<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eerst oefening met Formulier</title>
    <style>
        table{
            background-color: #EEEEEE;
            font-family: "Tahoma";
        }
    </style>
</head>
<body>
    <?php
        echo "test<br>";
        if ( !empty($_GET) )
        {
            $voornaam   = $_GET['voornaam'];
            $achternaam = $_GET['achternaam'];
            $gender     = $_GET['gender'];
 
            echo "<br>Er is een Page reload gebeurt vanwege een Submit";
            echo "Wat is er dan gesubmit?";
           
            echo "<br>";
            echo $voornaam .  " " . $achternaam;
            echo "<br>";
            echo $gender;
            if ( $gender == "M")
            {
                echo 'Een man';
            }
        }
        else
        {
            echo "<br>De 1e Page LOAD";
        }
    ?>
    <form method="get" id="formulier">
        <table>
            <tr>
                <td><label for="achternaam">Achternaam</label></td>
                <td><input type="text" name="achternaam" id="achternaam" placeholder="Vul hier uw achternaam in"></td>
            </tr>
            <tr>
                <td><label for="voornaam">Voornaam</label></td>
                <td><input type="text" name="voornaam" id="voornaam" placeholder="Vul uw voornaam in"></td>
            </tr>
            <tr>
                <td colspan="2"><label>Gender</label></td>
            </tr>
            <tr>
                <td><label for="female">Vrouw</label> </td>
                <td><input type="radio" id="female" name="gender" value="F"></td>
            </tr>
            <tr>
                <td><label for="male">Man</label> </td>
                <td><input type="radio" id="male" name="gender" value="M"></td>
            </tr>
            <tr>
                <td><label for="unknown">Onbekend/Wil niet zeggen</label></td>
                <td> <input type="radio" id="unknown" name="gender" value="U" checked></td>
            </tr>
            <tr>
               <td colspan="2">
                    <input type="submit" value="Vraag nieuwsbrief aan">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>