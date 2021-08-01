<?php 
include_once 'Main_header.php';
include_once '../Controller/Registration_validation.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
</head>
<body>
    <form method="post" action=" ">
        <br>
        <fieldset style="width:30%;text-align: center;margin-left: 515;">
            <legend>Registration</legend>
            <label for="role">Role:</label>
            <select id="role" name="role">
            <option value="volunteer">Volunteer</option>
            <option value="planter">Planter</option>
            <option value="donor">Donor</option>
            </select> 
            <br><br>
            <label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Email: </label>
            <input type="text" name="email" placeholder = "Email" value=" ">
            <br><br>
            <label>Username: </label>
            <input type="text" name="username" placeholder = "Username" value=" ">
            <br><br>
            <label>&nbsp; &nbsp;Password: </label>
            <input type="text" name="password" placeholder= "Password" value=" ">
            <hr style="width:95%;text-align:left;margin-left:0">
            <br>
            <input type="submit" name="submit" value="Signup"> 
            <br><br> Already have an account? <a href="login.php">Sign in</a>      
        </fieldset>
    </form>
</body>
</html>
