<a href="index.php?page=insert">Toevoegen</a>
<?php
$conn = mysqli_connect("localhost" , "root","","wereld");
$sql = "SELECT * FROM land";
$result = mysqli_query($conn, $sql);
echo"<table>";
while ($row = mysqli_fetch_assoc($result)) {
    echo"<tr>";
    echo "<td>".$row["landnaam"]."</td><td>".$row["landcode"]. "</td>";
    echo"</tr>";
    
}
echo"</table>";
    mysqli_close( $conn);

?>