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

                <h1>Gegevens</h1>
                
            </header>
            <nav class="navigatie">
                <ul>
                    <li>
                        <a href="index.php?page=home">Home</a>
                    </li>
                    <li>
                        <a href="index.php?page=read">Read</a>
                    </li>
                    <li>
                        <a href="index.php?page=create">Create</a>
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
                &copy; Liza
            </footer>     
            </div>   

</body>
</html>