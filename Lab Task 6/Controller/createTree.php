<?php
require '../Model/db_connect.php';
$message = '';
if (isset ($_POST['submit'])) {
  $name = $_POST['name'];
  $stock = $_POST['stock'];
  $variant = $_POST['variant'];
  $planted = $_POST['planted'];
  $image = $_POST['image'];
  $sql = 'INSERT INTO tree(name, stock, variant, planted, image) VALUES(:name, :stock, :variant, :planted, :image)';
  $statement = $conn->prepare($sql);
  if ($statement->execute([':name' => $name, ':stock' => $stock, ':variant' => $variant, ':planted' => $planted, ':image' => $image])) {
    $message = 'Data inserted successfully';
  }
}
?>
