<?php

$id = $_GET['id'];
$query = "DELETE FROM `voetballers` WHERE id=" . "$id;"; 

if(mysqli_query($conn, $query));
{
    header("location: index.php?page=home");
}

?>