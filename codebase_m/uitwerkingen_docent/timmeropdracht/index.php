<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="header">
        <h1>Timmeropdracht</h1>
    </div>
    <div id="general">
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente cum vel est, debitis vitae, itaque eum autem voluptatum, enim aliquid fugit ipsam? Debitis aliquam mollitia, in temporibus saepe similique nesciunt.
        </div>
        <div>
            <img src="?" alt="foto van iets">
        </div>
    </div>
    <form>
    <div id="assignment">
        <div id="plaatjescontainer">
            <div class="singleimagecontainer">
                <img src="images/berken.jpg" alt="berkenhout">
                <input type="radio" name="woodtype" value="9.5"> Berken - prijs per m2 € 9,50
            </div>
            <div class="singleimagecontainer">
                <img src="images/grenen.jpg" alt="grenenhout">
                <input type="radio" name="woodtype" value="8.5"> Grenen - prijs per m2 € 8,50
            </div>
            <div class="singleimagecontainer">
                <img src="images/hardhout.jpg" alt="hardhout">
                <input type="radio" name="woodtype" value="11.5"> Hardhout - prijs per m2 € 11,50
            </div>
        </div>

        <div id="derestvanhetformulier">
           Rechthoek? <input type="radio" name="shape" value="S">

           Breedte in mm <input type="number" name="width">
           Lengte in mm <input type="number" name="length">

           Rond?  <input type="radio" name="shape" value="R">
           diameter in mm <input type="number" name="diameter">

           <input type="submit">
        </div>
    </div>
</form>

<div id="result">
    <?php

        if(!empty($_GET))
        {
            echo "er is geklikt";

            $price = $_GET['woodtype'];
            $shape = $_GET['shape'];

            if($shape == "S")
            {
                $length = $_GET['length'];
                $width = $_GET['width'];

                $totaal = (int)$length * (int)$width * (float)$price / 1000000;

                echo "Totaal: $totaal";
            }
            else
            {
                /// iets anders
            }
        }
        else
        {
            echo "er is nog niet geklikt";
        }
    ?>
</div>
</body>
</html>