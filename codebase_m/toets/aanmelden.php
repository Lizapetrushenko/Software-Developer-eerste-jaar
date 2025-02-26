<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <style>
    #aanmelding{
        background-color: yellowgreen;
        display:flex;
        flex-diraction:row;
        border: 10px solid yellowgreen;
    }
    #aanmeldtekst
    {
        padding-left: 10px;
    }

    h3
    {
        margin-top: 0px;
    }

    img{
        width: 40px;
        height: 50px;
    }
    #kerstboomplaatje
    {
        display: flex;
        background-color: yellow;
        padding: 0px 80px 0px 80px;
        align-items: center;
    }

    </style>
</head>
<body>

<div id=aanmelding>
    <div id=kerstboomplaatje>
    <img src="kerstboom.png">
    </div>
    <div id=aanmeldtekst>
    <h3>
    <?php
    echo "Leuk". " ". $_GET['naam'] . " dat jij je aangemeld hebt voor de kerstborrel. Binnenkort ontvang je op " . $_GET['email'] . " een bevestiging van deze aanmelding";
    ?>
    </h3>
    </div>
</div>
</body>
</html>