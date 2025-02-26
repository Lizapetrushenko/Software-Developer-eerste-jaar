<?php

$id = $_GET['id'];
$query = "DELETE FROM `gegevens` WHERE id=" . "$id;"; 

if(mysqli_query($conn, $query));
{
    header("location: index.php?page=read");
}

?>