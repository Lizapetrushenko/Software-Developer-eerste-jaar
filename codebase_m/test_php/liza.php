<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
-1.Geef lengte op (in cm)<input type="number" name="1"><br>
-2.Geef lengte op (in cm)<input type="number" name="2"><br>
-3.Geef lengte op (in cm)<input type="number" name="3"><br>
-4.Geef lengte op (in cm)<input type="number" name="4"><br>
-5.Geef lengte op (in cm)<input type="number" name="5"><br>
<input type="submit" name="verzenden "><br>
</form>
<?php
if(isset($_GET['verzenden'])> 170){
    echo"langer dan 170";
}
if(isset($_GET['verzenden'])<170) {
echo "korter dan 170";
}
?>
</body>

</html>








?>
</body>
</html>