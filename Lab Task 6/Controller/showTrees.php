<?php
require '../Model/db_connect.php';
$sql = 'SELECT * FROM tree';
$statement = $conn->prepare($sql);
$statement->execute();
$tree = $statement->fetchAll(PDO::FETCH_OBJ);
?>
