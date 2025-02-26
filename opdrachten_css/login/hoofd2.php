<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
if (isset($_POST['pizza'])) {
    // Process the order
    header("Location: login2.php");
    exit(); // Stop script execution after redirect
} else {
    echo "Maak je bestelling";
}

?>


<body>
    <div id="pizzas">
        <div class="plaatjescontainer">
            <div>
                <img src="spianata_piccante.jpg">
            </div>

            <div id="spinata">
                <label for="spianata">
                    Pizza Spianata Piccante € 12,50
                </label>
                <input type="radio" id="spianata" name="pizza" value="spinata">
            </div>
        </div>

        <div class="plaatjescontainer">
            <div>
                <img src="seppi.jpg">
            </div>
            <div>
                <label>
                    Pizza Seppi € 11,50
                </label>
                <input type="radio" id="seppi" name="pizza">
            </div>
        </div>

        <div class="plaatjescontainer">
            <div>
                <img src="tirato.jpg" id="tirato">
            </div>
            <div>
                <label>
                    Pizza Tirato € 10,50
                </label>
                <input type="radio">
            </div>
        </div>

    </div>
    <div id="extra">
        <div id="container_formulier">

            <div id="extra_keuze">
                <input type="checkbox" value="Ik wil extra olijven bijbestellen € 2,50">
                <label>
                    Ik wil extra olijven bijbestellen € 2,50
                </label>
            </div>

            <div id="extra_keuze">
                <input type="checkbox" value="Ik wil extra kaas bijbestellen € 1,50">
                <label>
                    Ik wil extra kaas bijbestellen € 1,50
                </label>
            </div>

            <div id="extra_keuze">
                <input type="checkbox" value="Ik wil de pizza laten bezorgen € 3,50">
                <label>
                    Ik wil de pizza laten bezorgen € 3,50
                </label>
            </div>
        </div>
    </div>
    <input type="submit" value="bestellen" name="bestellen" id="bestellen">
</body>

</html>