<?php 
    include_once 'Main_header.php';
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <ul>
    <li><a href="showAllTrees.php">Tree Details</a></li>
    </ul>
    <!-- Welcome to <?php echo $_SESSION["username"]; ?> dashboard -->
</body>
</html>
