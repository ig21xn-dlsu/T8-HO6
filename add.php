<?php include('nav.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    
        <form action="submit.php" method="POST">
            <label for="title">Book Title:</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="description">Descriptio:</label><br>
            <input type="text" id="description" name="description"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

