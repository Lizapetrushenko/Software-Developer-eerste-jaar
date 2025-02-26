<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Artist</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            align-items: center;
            height: 100vh;
        }

        main
        {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-align: center;
            color: #007bff;
            font-size: 16px;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }

        .message.success {
            color: green;
        }

        .message.error {
            color: red;
        }
        
        a{
            display: flex;
            justify-content: end;
        }

    </style>
</head>

<body>
    <div class="container">
    <form method="post">
        <label>Naam</label>
        <input type="text" name="name" required>
        <label>Land</label>
        <input type="text" name="country" required>
        <input type="submit" name="submit">
    </form>
    <?php

    require_once "conn.php";

    if (isset($_POST["submit"])) {

        $name = $_POST["name"];
        $country = $_POST["country"];

        // SQL variabele aanpassen
        $sql = "INSERT INTO `artist`(`name`, `country`) VALUES ('$name', '$country')";

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (mysqli_query($conn, $sql)) {
            // deze regel aanpassen (de echo)
            echo "de gegevens zijn toegevoegd";

        } else {
            echo "niet gelukt";
        }
        $conn->close();
    }

    ?>
    </div>
    


</body>

</html>