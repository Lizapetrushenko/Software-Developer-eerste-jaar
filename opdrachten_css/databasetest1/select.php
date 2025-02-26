<style>
table{
    border: 1px solid black;
}
tr,td{
    border:1 px solid black;
}
.knop{
    display: flex;
    justify-content: space-around;
   
}
h2{
    display: flex;
    justify-content: center;
    background-color: blue;
}
</style>

<h2>Artisten</h2>
<div class="knop">
<div>
<a href="hoofd.php">Home</a>
</div>
<div>
<a href="select.php">select</a>
</div>
<div>
<a href="insert.php">Insert artist</a>
</div>
</div>
<div name="tabel">
    <h3> Selecteer artisten</h3>
<?php

$conn = mysqli_connect("localhost" , "root","","top2000");
$sql = "SELECT * FROM artist";
$result = mysqli_query($conn, $sql);
echo"<table>";
while ($row = mysqli_fetch_assoc($result)) {
    echo"<tr>";
    echo "<td>".$row["name"]."</td><td>".$row["country"]. "</td>";
    echo"</tr>";
    
}
echo"</table>";
    mysqli_close( $conn);


?>
</div>