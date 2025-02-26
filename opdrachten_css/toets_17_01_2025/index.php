<?php
include 'connection/conn.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
<body>
    <div id="container">
            <header>

                <h1>Voetballers</h1>
                
            </header>
            <nav class="navigatie">
                <ul>
                    <li>
                        <a href="index.php?page=home">Home</a>
                    </li>
                    <li>
                        <a href="index.php?page=home">Herstellen</a>
                    </li>
                    <li>
                        <a href="index.php?page=create">Toevoegen</a>
                    </li>
                </ul>
            </nav> 
            <main>
            <?php
                $page = "home";

                if(isset($_GET['page']))
                {
                    $page = $_GET['page'];
                }

                include "content/" . $page . ".php"; ?>
                
            </main>   
            <footer>
                &copy; Liza Petrushenko
            </footer>     
            </div>   

</body>
</html>