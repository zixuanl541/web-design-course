<?php
    session_start();

    $message="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $_SESSION["account"]=$_POST["name"];
        $_SESSION["password"]=$_POST["password"];
        $_SESSION["gender"]=$_POST["gender"];
        $_SESSION["date"]=$_POST["date"];
        $_SESSION["id"]=$_POST["id"];
        $_SESSION["phone"]=$_POST["phone"];
        $_SESSION["email"]=$_POST["email"];
        $_SESSION["address"]=$_POST["address"];
        $_SESSION["agree"]=isset($_POST["agree"])?"YES":"NO";

        $message = "Registration successful!<br><br>";
        
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
    </head>

    <body>
        <h1>Register</h1>

        <?php
            if ($message !="") {
                echo "<p style='color:green;'>$message</p>";
            }
        ?>

        <form action="" method="post">
            Name: 
            <input type="text" placeholder="Enter your name" name="name" value="" <select name="tshirt_size" required>><br><br>
            
            Password:
            <input type="password" name="password" required><br><br>
            
            Gender: 
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other" > Other <br><br>

            Birth:
            <input type="date" id="date" name="date" required><br><br>  

            ID:
            <input type="text" id="id" name="id" required><br><br>

            Phone number:
            <input type="tel" id="phone" name="phone" required><br><br>

            Email:
            <input type="email" id="email" name="email" required><br><br>

            Address:
            <input type="text" id="address" name="address" required><br><br> 

            <input type="checkbox" name="agree" value="yes" required> I agree to the terms and conditions<br><br>

            <button type="submit">Submit</button><br><br>
        </form>
    </body>
</html>