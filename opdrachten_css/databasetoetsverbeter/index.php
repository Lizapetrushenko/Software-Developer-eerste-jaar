<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Artist List</title>
    <style>

        .container-page
        {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

         main
        {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }
    </style>
</head>

<body>

        <div class="container-page">
        <h2>Artist List</h2>
        <nav>
        <ul>
            <li><a href="index.php?pagina=home.php">Home</a></li>
            <li><a href="index.php?pagina=insert.php">Insert</a></li>
            <li><a href="index.php?pagina=select.php">Select</a></li>
        </ul>
        </nav>
        <main>
        <?php
        // Default page is home.php
        $page = "home.php";
        
        // If a page is passed in the URL, use it
        if (!empty($_GET["pagina"])) {
            $page = $_GET["pagina"];
        }

        // Include the correct page, use double quotes to properly interpolate the variable
        include($page);
        ?>

</main>
</div>

</body>

</html>
