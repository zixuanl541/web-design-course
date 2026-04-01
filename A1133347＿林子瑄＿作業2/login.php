<?php
    session_start();

    $message="";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(isset($_POST["name"]) && isset($_POST["password"])){
            $name=$_POST["name"];
            $password=$_POST["password"];

            if(isset($_SESSION["account"]) && isset($_SESSION["password"])&& $name==$_SESSION["account"] && $password==$_SESSION["password"]){
                $_SESSION["Login"]=true;
                header("Location: form.php");
                exit();
            }else{
                $message="Invalid account or password. Please try again.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>

    <body>
        <h1>Login</h1>

        <?php
            if ($message != "") {
                echo "<p style='color:red;'>$message</p>";
            }
        ?>

        <form action="" method="post">
            Name: 
            <input type="text" placeholder="Enter your name" name="name" value="" required><br><br>
            
            Password:
            <input type="password" name="password" required><br><br>

            <button type="submit">submit</button><br><br>
        </form>
    </body>
</html>