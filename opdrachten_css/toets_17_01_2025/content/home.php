<?php

$result = $conn->query("SELECT * FROM voetballers");

?>
<table>
    <tr>
        <th>Foto</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>geboortedatum</th>
        <th>Update</th>
        <th>Verwijderen</th>
    </tr>
    <?php 



    while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><img class="foto" src='afbeeldingen/<?= $row['foto_url'] ?>'></td>
        <td><?= $row['voornaam'] ?></td>
        <td><?= $row['achternaam'] ?></td>
        <td><?php echo $row['geboortedatum']; ?></td>
        <td><a href="index.php?page=update&id=<?= $row['id'] ?>">Update</a></td>
        <td><a href="index.php?page=delete&id=<?php echo $row['id']; ?>">Verwijderen</a></td>
    </tr>

    <?php } ?>
</table>