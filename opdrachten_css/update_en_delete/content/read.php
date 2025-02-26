<?php

$result = $conn->query("SELECT * FROM gegevens");

?>
<table>
    <tr>
        <th>Naam</th>
        <th>Adres</th>
        <th>Leeftijd</th>
        <th>Update</th>
        <th>Verwijderen</th>
    </tr>
    <?php 



    while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['naam'] ?></td>
        <td><?= $row['adres'] ?></td>
        <td><?php echo $row['leeftijd']; ?></td>
        <td><a href="index.php?page=update&id=<?= $row['id'] ?>">Update</a></td>
        <td><a href="index.php?page=delete&id=<?php echo $row['id']; ?>">Verwijderen</a></td>
    </tr>

    <?php } ?>
</table>