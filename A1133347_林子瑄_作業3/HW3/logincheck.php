<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header("Location: index.php");
        exit();
    }

    $sID = 'A1133347';
    $sPWD = '123456';

    $tID = 'derrick';
    $tPWD = '654321';

    $aID = 'admin';
    $aPWD = '12345';

    $uID = $_POST['uName'];
    $uPWD = $_POST['uPassword']; 

    $date=strtotime("+5 day", time());  //設定cookie過期時間為5天

    if($uID == $sID && $uPWD == $sPWD){
        $_SESSION['Login'] = 'student';
        setcookie("uName", $uID, $date);
        header("Location: student.php");
        exit();

    }else if($uID == $tID && $uPWD == $tPWD){
        $_SESSION['Login'] = 'teacher';
        setcookie("uName", $uID, $date);
        header("Location: teacher.php");
        exit();

    }else if($uID == $aID && $uPWD ==$aPWD){
        $_SESSION['Login'] = 'admin';
        setcookie("uName", $uID, $date);
        header("Location: admin.php");
        exit();

    }else{
        echo "Login failed!";
        echo "<a href='logout.php'>Logout</a><br/>";
        header("Refresh:3; url=index.php");
    }
?>