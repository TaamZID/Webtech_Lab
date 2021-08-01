<?php include_once '../Controller/editProfile_valid.php'; 
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
            <legend>EDIT PROFILE</legend>

            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            </label>
            <input type="text" name="username" value="<?php 
              if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
              }
            ?>">            
            <br><br>
            
            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="email" value="<?php 
                echo $email;
            ?>"> 
            <br><br>
            <input type="submit" name="submit" value="Update"> &nbsp;   
            <a href="profile.php"> Go Back to Dashboard.</a>
        </fieldset>
    </form>
</body>
</html>
