<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: lightcyan;
        }

        .border {
            width: 25vw;
            height: 25vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 2px double aqua;
            border-radius: 5%;
            margin: auto;
            background-color: lightblue;
            box-shadow: 10px 10px 5px lightblue;
        }

        h1 {
            font-family: cursive;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 4px #000000;

        }

        #login {
            margin-top: 31.5vh;
            color: white;
            text-shadow: 2px 2px 4px #000000;

        }
    </style>
</head>

<body>
<?php
if(empty($_POST)){
    echo "om in te loggen graag alles invullen en klikken";
}
else{
    $user=$_POST['email'];
    $pass=$_POST['password'];

// Je hebt nu uit het form 2 waarden 
// Ga nu in de database kijken of ze daar ook in staan.
// 1. Connectie 

$con = mysqli_connect("localhost", "root", "", "loginopdracht");
//2. query
$res = mysqli_query($con, "SELECT * FROM users WHERE email = '$user' AND password = '$pass'");
//3. Num Rows


    echo"succesvol";
}

?>
    
    <div id="login">
        <h1>Login</h1>
        <form method="post" action="#">
        <div class="border">
            <label id="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="voer je email in" style="color: lightgrey;"><br>
            <label id="password">Password</label><br>
            <input type="password" id="password" name="password" placeholder="voer je password in"><br>
            <input type="submit" value="Next">
        </div>
    </div>
</form>
</body>

</html>
