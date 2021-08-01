<?php
require '../Model/db_connect.php';
$id = $_GET['id'];
$sql = 'DELETE FROM tree WHERE id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location:../View/showAllTrees.php");
}
