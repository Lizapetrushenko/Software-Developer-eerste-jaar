<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#content{
    background-color: yellow;
}
#header, #footer{
background-color: navy;
color: white;
}
#menu{
    display: flex;
}
#menu div{
border: 1px solid gray;
width: 150px;
border-radius: 4px;
}
    </style>
</head>
<body>
    <div>
        <div id="header">header</div>
        <div id="menu">
            <div><a href="index.php?p=home">home</a></div>
            <div><a href="index.php?p=chris">chris</a></div>
            <div><a href="index.php?p=update">update</a></div>
        </div>
        <div id="content">
        <?php
        if(isset($_GET["p"])){
            echo $_GET["p"];
        }
        include "pags/" . $_GET["p"] . ".php";
        ?>    
        </div>
        <div id="footer">footer</div>
    </div>
</body>
</html>