<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container
        {
            
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        #invoer
        {
            border: solid 1px blue;
            border-radius: 5px;
            background-color: lightblue;
            width:250px;
        }
    </style>
</head>
<body>

<div id="container">
    <div id="invoer">
        <label>Naam</lebel><br>
        <input type="text" placeholder="Naam" name="naam"><br>
        <label>Taakomschrijving</label><br>
        <input type="text" placeholder="Taakomschrijving" name="taakomschrijving"><br>
        <label>Deadline</label><br>
        <input type="date" name="deadline"><br>
        <input type="submit" name="submit" value="Verzenden"><br>
    </div>    
</div>
        
</body>
</html>