<?php include_once '../Controller/changePassword.php'; 
include_once 'Main_header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> </title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width:30%;text-align: center;margin-left: 505;">
            <legend>CHANGE PASSWORD</legend>
            <label>Current Password: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="cpassword" value="<?php echo $cpassword;?>">
            <br><br>
            <label style="color:#61B33B">New Password: &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</label>
            <input type="text" name="npassword" value="">
            <br><br>
            <label style="color:red">Retype New Password: </label>
            <input type="text" name="rpassword" value="">
            <hr style="width:95%;text-align:left;margin-left:0">
            <br>
            <input type="submit" name="submit" value="Submit"> 
            <a href="profile.php">Go Back!</a>    
        </fieldset>
    </form>
</body>
</html>
