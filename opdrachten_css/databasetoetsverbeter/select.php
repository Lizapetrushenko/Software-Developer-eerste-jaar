<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
           
        }

        h2 {
            text-align: center;
            font-size: 2em;
            color: #333;
        }

        .artist-list {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        .artist-list th, .artist-list td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .artist-list th {
            background-color: #007bff;
            color: white;
        }

        .artist-list tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .artist-list tr:hover {
            background-color: #f1f1f1;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #218838;
        }

</style>
</head>
<body>
<?php

        require_once "conn.php";

        // SQL variabele aanpassen
        $sql = "SELECT * FROM artist";

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='artist-list'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Country</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["country"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No results found</p>";
        }
        $conn->close();
        ?>
        
        
</body>
</html>