<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location:form.php");
    exit();
}

?>
<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        <h1>Login</h1>
        <form action="" method="post">
            Name: 
            <input type="text" placeholder="Enter your name" name="name" value="DD"><br><br>
            
            Password:
            <input type="password" name="password"><br><br>

            <button onclick="window.location.href='form.php'">submit</button><br><br>
        </form>
    </body>
</html>