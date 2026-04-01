<?php
    if($_SERVER["REQUEST_METHOD"]!="POST"){
        header("Location: login.php");
        exit();
    }

    $name=$_POST["camper_name"];
    $gender=$_POST["gender"];
    $input_age=$_POST["age"];
    $date=$_POST["date"];

    $birth=new DateTime($date);
    $today=new DateTime();
    $real_age = $today->diff($birth)->y;

    if($real_age < 6 || $real_age > 12) {
        echo "<p style='color:red;'>Error: Camper must be between 6 and 12 years old. Your age is calculated as $real_age.</p>";
        echo "<p><a href='form.php'>Go back</a></p>";
        exit();
    }

    if($input_age != $real_age){
        echo "<p style='color:red;'>Error: The age you entered ($input_age) does not match the calculated age ($real_age) based on the birth date. Please correct the age or birth date.</p>";
        echo "<p><a href='form.php'>Back</a></p>";
        exit();
    }

    $sports_level=$_POST["sports_level"];
    $arts_level=$_POST["arts_level"];
    $music_level=$_POST["music_level"];
    $outdoor_level=$_POST["outdoor_level"];

    $parent_name=$_POST["parent_name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $address=$_POST["address"];

    $emergency_name=$_POST["emergency_name"];
    $emergency_phone=$_POST["emergency_phone"];

    $tshirt_size=$_POST["tshirt_size"];
    $color=$_POST["color"];

    $health_info = htmlspecialchars(strip_tags($_POST["health_info"]));

    $agree=isset($_POST["agree"])?"YES":"NO";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration Result</title>
    </head>
    <body>
        <h1>Please Confirm Your Information</h1>

        <h2>Camper Information</h2>
        <?php
            echo "<B>Name:</B> " . $name ."<br><br>";
            echo "<B>Gender:</B> " . $gender . "<br><br>";
            echo "<B>Age:</B> " . $real_age . "<br><br>";
            echo "<B>Birth Date:</B> " . $date . "<br><br>";
        ?>

        <h2>Activity Preference</h2>
        <?php            
            echo "<B>Sports interest level:</B> " . $sports_level . "<br><br>";
            echo "<B>Arts and Crafts interest level:</B> " . $arts_level . "<br><br>";
            echo "<B>Music interest level:</B> " . $music_level . "<br><br>";
            echo "<B>Outdoor interest level:</B> " . $outdoor_level . "<br><br>";
        ?>

        <h2>Parent/Guardian Information</h2>
        <?php
            echo "<B>Name:</B> " . $parent_name . "<br><br>";
            echo "<B>Phone number:</B> " . $phone . "<br><br>";
            echo "<B>Email:</B> " . $email . "<br><br>";
            echo "<B>Address:</B> " . $address . "<br><br>";
        ?>

        <h2>Emergency Contact Information</h2>
        <?php
            echo "<B>Name:</B> " . $emergency_name . "<br><br>";
            echo "<B>Phone number:</B> " . $emergency_phone . "<br><br>";
        ?>

        <h2>Additional Information</h2>
        <?php
            echo "<B>T-shirt size:</B> " . $tshirt_size . "<br><br>";
            echo "<B>Color:</B> <span style='color:". $color ."'>". $color ."</span><br><br>";
            echo "<B>Health information:</B> " . $health_info . "<br><br>";
            echo "<B>Agree to terms and conditions:</B> " . $agree . "<br><br>";
        ?>

        <form action="submit.php" method="post">
            <input type="hidden" name="camper_name" value="<?php echo $name; ?>">
            <input type="hidden" name="gender" value="<?php echo $gender; ?>">
            <input type="hidden" name="age" value="<?php echo $real_age; ?>">    
            <input type="hidden" name="date" value="<?php echo $date; ?>">

            <input type="hidden" name="sports_level" value="<?php echo $sports_level; ?>">
            <input type="hidden" name="arts_level" value="<?php echo $arts_level; ?>">
            <input type="hidden" name="music_level" value="<?php echo $music_level; ?>">
            <input type="hidden" name="outdoor_level" value="<?php echo $outdoor_level; ?>">

            <input type="hidden" name="parent_name" value="<?php echo $parent_name; ?>">
            <input type="hidden" name="phone" value="<?php echo $phone; ?>">  
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="address" value="<?php echo $address; ?>">
            <input type="hidden" name="emergency_name" value="<?php echo $emergency_name; ?>">
            <input type="hidden" name="emergency_phone" value="<?php echo $emergency_phone; ?>">
            <input type="hidden" name="tshirt_size" value="<?php echo $tshirt_size; ?>">
            <input type="hidden" name="color" value="<?php echo $color; ?>">            
            <input type="hidden" name="health_info" value="<?php echo $health_info; ?>">
            <input type="hidden" name="agree" value="<?php echo $agree; ?>">    
            <button type="button" onclick="location.href='form.php'">Back</button>
            <button type="submit">Confirm & Submit</button>
        </form>      
    </body>
</html>