<?php
$producten;

require_once("db_connect.php");

$query = "SELECT naam, afbeelding, prijs FROM Product";

$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    $producten = mysqli_fetch_assoc($result);
    print_r($producten);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume</title>
    <style>
        div {
            display: flex;
            justify-content: center;
        }

        img {
            height: 400px;

        }

        label {
            align-self: center;
        }

        input[type=checkbox] {
            margin: 15px;

        }
    </style>
</head>

<body>
    <h1> Perfume</h1>
    <div style="display: flex ; justify-content: center; ">
        <div>
            <img src="images/1.2.jpg">

        </div>

        <div>
            <input type="checkbox">
            <label>Tease Sugar Fleur</label>&nbsp;
            <label>26.00€</label>
        </div>

    </div>


</body>

</html>