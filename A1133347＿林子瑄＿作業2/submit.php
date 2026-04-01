<?php
    if($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: login.php");
    exit();
    }
    Header("Refresh: 5; url=summer_camp.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Summer Camp Registration</title>
    </head>
    <body>
        <h1>Summer Camp Registration Successful</h1>
        
        <p>Thank you for joining the summer camp!</p>
    </body>
</html>