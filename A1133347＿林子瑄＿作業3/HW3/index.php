<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
    <h2>登入系統</h2>

    <?php
        if(isset($_COOKIE['uName'])){
            echo $_COOKIE['uName'] . "歡迎回來!<br/>";
            echo "<a href='cookiedelete.php'>Delete Cookie</a><br/>";   
            echo "<a href='logout.php'>Logout</a><br/>"; 
            echo "<hr/>";
        }
    ?>

    <form action="logincheck.php" method="post">
        ID: <input type="text" name="uName" placeholder="Username" required>
        <br><br>
        Password: <input type="password" name="uPassword" placeholder="Password" required>
        <br><br>

        <button type="submit">Login</button>
    </form>
    
</body>
</html>