<?php 
include_once '../Model/db_connect.php';
session_start();
$message = " ";
if(isset($_POST["submit"])){
    $role = $_POST['role'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])){
        echo "All fields are required";
    }
    else{
        $query = "INSERT INTO users (role, email, username, password) VALUES (:role, :email, :username, :password)";
        $stm = $conn->prepare($query);
        $stm->execute(['role' => $role, 'email'=> $email, 'username'=> $username, 'password'=> $password]);
        $message = "Registration Successful!";
    }
}
?>
