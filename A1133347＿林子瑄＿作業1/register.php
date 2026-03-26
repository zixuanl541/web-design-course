<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location:form.php");
    exit();
}

?>
<html>
    <head>
        <title>Register</title>
    </head>

    <body>
        <h1>Register</h1>

        <form action="" method="post">
            Name: 
            <input type="text" placeholder="Enter your name" name="name" value="DD"><br><br>
            
            Password:
            <input type="password" name="password"><br><br>
            
            Gender: 
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other <br><br>

            Birth:
            <input type="date" id="date" name="date"><br><br>  

            ID:
            <input type="text" id="id" name="id"><br><br>

            Phone number:
            <input type="tel" id="phone" name="phone"><br><br>

            Email:
            <input type="email" id="email" name="email"><br><br>

            Address:
            <input type="text" id="address" name="address"><br><br> 

            <input type="checkbox" name="agree" value="yes"> I agree to the terms and conditions<br><br>

            <button onclick="window.location.href='form.php'">Submit</button><br><br>
        </form>
    </body>
</html>