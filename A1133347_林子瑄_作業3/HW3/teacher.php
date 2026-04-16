<?php
    session_start();

    if(isset($_SESSION['Login'])){
        if($_SESSION['Login'] == 'teacher'){
            echo "<h1>Welcome, teacher!</h1>";
            if (isset($_COOKIE['uName'])) {
                echo "<p>Your ID is: " . $_COOKIE['uName'] . "</p>";
            } else {
                echo "<p>Cookie does not exist.</p>";
            }
            echo "<a href ='logout.php'>Logout</a>";

        }else{
            echo "<h1>You are not a teacher!</h1>";
            echo "<a href ='logout.php'>Logout</a>";
            
        }
    }else{
        echo "<h1>You are not logged in. Please login first.</h1>";  
        echo "<a href ='index.php'>Login</a>";
    }
?>