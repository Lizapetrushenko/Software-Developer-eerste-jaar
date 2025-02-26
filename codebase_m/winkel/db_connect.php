<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webwinkel";

$connection = new mysqli($servername, $username, $password, $dbname);


if (!$connection){

    die("Connection failed". mysqli_connect_error());

}

?>