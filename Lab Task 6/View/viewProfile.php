<?php 
    include_once 'Main_header.php';
    include_once '../Controller/viewProfile.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
        <form action="" method="post">
          <fieldset style="width:30%;text-align: center;margin-left: 500;">
            <legend>PROFILE</legend>
            <label>Username:</label>
            <?php echo $username; ?> 
            <br>
            <label>Email:</label>
            <?php echo $email; ?> 
            <hr style="width:100%;text-align:left;margin-left:0">
            <br>
            <a href="editProfile.php">Edit Profile.</a>
            <br>
            <a href="profile.php"> Go Back to Dashboard.</a>
            <a href="logout.php">Logout.</a>
          </fieldset>
        </form>
</body>
</html>
