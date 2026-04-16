<?php
    session_start();

    if(isset($_SESSION['Login'])){
        if($_SESSION['Login'] == 'admin'){
            echo "<h1>Welcome, admin!</h1>";
            if (isset($_COOKIE['uName'])) {
                echo "<p>Your ID is: " . $_COOKIE['uName'] . "</p>";
            } else {
                echo "<p>Cookie does not exist.</p>";
            }
            echo "<a href ='logout.php'>Logout</a>";
            header("Refresh:3;url=index.php");

        }else{
            echo "<h1>You are not an admin!</h1>";
            echo "<a href ='logout.php'>Logout</a>";
            header("Refresh:3;url=index.php");
        }
    }else{
        echo "<h1>You are not logged in. Please login first.</h1>";  
        echo "<a href ='index.php'>Login</a>";
        header("Refresh:3;url=index.php");

    }
?>