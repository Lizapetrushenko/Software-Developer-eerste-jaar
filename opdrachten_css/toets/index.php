<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Welkome op de in dex pagina</h1>
    <?php
$page="select";
if(isset($_GET["page"])){
$page=$_GET["page"];
}
include($page . ".php");
?>
</body>
</html>