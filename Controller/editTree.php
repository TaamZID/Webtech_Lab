<?php
require '../Model/db_connect.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM tree WHERE id=:id';
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id ]);
$tree = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['stock']) ) {
  $name = $_POST['name'];
  $stock = $_POST['stock'];
  $variant = $_POST['variant'];
  $planted = $_POST['planted'];
  $image = $_POST['image'];
  $sql = 'UPDATE tree SET name=:name, stock=:stock, variant=:variant, planted=:planted, image=:image WHERE id=:id';
  $statement = $conn->prepare($sql);
  if ($statement->execute([':name' => $name, ':stock' => $stock, ':variant' => $variant, ':planted' => $planted, ':image' => $image, ':id' => $id])) {
    header("Location:../View/showAllTrees.php");
  }
}
?>
