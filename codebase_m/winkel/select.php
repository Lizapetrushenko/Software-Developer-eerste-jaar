<?php

include "db_connect.php";

$query = "SELECT naam, afbeelding, prijs FROM Product";

$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) 
    {
        $rows[] = $row;
    }     
}
else
{
    echo "0 results";
}




?>