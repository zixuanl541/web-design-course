<?php   
    session_start();

    if (!isset($_SESSION["Login"]) || $_SESSION["Login"] !== true) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summer Camp Registration Form</title>
</head>
    <body>
        <h1>Summer Camp Registration Form</h1>
        <p>Please fill in the form below to register for the summer camp.</p>
        
        <hr>
        
        <form action="result.php" method="post">
            <h3>Camper Information</h3>

            Name: 
            <input type="text" placeholder="Enter camper's full name" name="camper_name" value="" required><br><br>
            
            Gender: 
            <input type="radio" name="gender" value="male" checked>Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other<br><br>

            Age:
            <input type="number" id="age" name="age" min="6" max="12" required><br><br>

            Birth:
            <input type="date" id="date" name="date" required><br><br>

            <hr>

            <h3>Activity Preference</h3>
                <p>Please rate your interest level in the following activities (1 = least interested, 5 = most interested):</p> 
                Sports:
                <input type="range" name="sports_level" min="1" max="5" value="3"
                    oninput="sportsValue.innerText = this.value">
                <span id="sportsValue">3</span>
                <br><br>

                Arts and Crafts:
                <input type="range" name="arts_level" min="1" max="5" value="3"
                    oninput="artsValue.innerText = this.value">
                <span id="artsValue">3</span>
                <br><br>

                Music:
                <input type="range" name="music_level" min="1" max="5" value="3"
                    oninput="musicValue.innerText = this.value">
                <span id="musicValue">3</span>
                <br><br>

                Outdoor Adventure:
                <input type="range" name="outdoor_level" min="1" max="5" value="3"
                    oninput="outdoorValue.innerText = this.value">
                <span id="outdoorValue">3</span>
                <br><br>
            
            <hr>

            <h3>Parent/Guardian Information</h3>
            Name:
            <input type="text" name="parent_name" required><br><br>
            Phone Number:
            <input type="tel" id="phone" name="phone" required><br><br>
            
            Email:
            <input type="email" id="email" name="email" required><br><br>
            
            Address:
            <input type="text" id="address" name="address" required><br><br>

            <hr>

            <h3>Emergency Contact Information (if different from parent/guardian)</h3>
            Emergency Contact Name:
            <input type="text" name="emergency_name" required><br><br>

            Emergency Contact Phone:
            <input type="tel" id="emergency_phone" name="emergency_phone" required><br><br>

            <hr>

            <h3>Additional Information</h3>

            T-Shirt Size:
            <select name="tshirt_size">
                <option value="small">S</option>
                <option value="medium" selected>M</option>
                <option value="large">L</option>
                <option value="xlarge">XL</option>
            </select><br><br>

            Color:
            <input type="color" id="color" name="color"><br><br>

            <hr>

            <h3>Health Information</h3>
            <p>Please provide any relevant health information(Allergies or Medical Conditions):</p>
            <textarea id="health_info" name="health_info" rows="5" cols="80"></textarea><br><br>
            
            <hr>

            <input type="checkbox" name="agree" value="yes" required> I agree to the terms and conditions<br><br>

            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </body>
</html>