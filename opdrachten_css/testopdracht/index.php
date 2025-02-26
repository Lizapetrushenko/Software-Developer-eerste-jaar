<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
<ul>
  <li><a href="index.php?pagina=home">Home</a></li>
  <li><a href="index.php?pagina=select">select</a></li>
  <li><a href="index.php?pagina=insert">insert</a></li>
  <li><a href="index.php?pagina=update">update</a></li>
</ul>
<nav>



</nav>




    <?php
    $page = "home";
    if(!empty($_GET["pagina"])){
    $page = $_GET["page"];
    }
    include('$page.php');
    ?>
</body>
</html>