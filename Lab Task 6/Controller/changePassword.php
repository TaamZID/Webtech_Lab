<?php
    include_once '../Model/db_connect.php';
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
    else{
        $sql =  "SELECT * FROM users WHERE username= '".$_SESSION['username']."'";
        foreach  ($conn->query($sql) as $row) {
        $cpassword = $row['password'];
    }
}
?>
