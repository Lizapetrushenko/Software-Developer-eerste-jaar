<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victoria secret </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Victoria secret </h1>
    <div id=formulier>
    <form>
        <input type="search" id="zoekveld">
        <input type="submit" id="Verzenden">
    </form>
    </div>
    <div class="plaatjescontainer">
        <div id="spray">
            <a href="spray.html">
                <img src="images/sprays.jpg">
            </a>
            <label>Spray</label>
        </div>

        <div id="perfume">
            <a href="perfume.html">
            <img src="images/perfume.jpg">
            </a>
            <label>Perfume</label>
        </div>
    </div>
    <?php
    
    $sql = "SELECT afbeelding FROM `product` where naam = \'\';";
    
    
    
    
    ?>
    
</body>

</html>