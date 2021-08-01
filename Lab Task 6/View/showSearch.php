<?php require 'header.php'; 
?>
<form method="POST">
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Searched Tree</h2>
    </form>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Stock</th>
          <th>Variant</th>
          <th>Planted</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
          <tr>
            <?php 
            require '../Model/db_connect.php';

            if(isset($_POST['search'])){
            $tamzid = $_POST['tamzid'];
            $query = $conn->prepare("SELECT * FROM tree WHERE name LIKE '%$tamzid%' or variant LIKE '%$tamzid%'");
            $query->execute();
            while($row=$query->fetch()) {?>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['stock'] ?></td>
            <td><?php echo $row['variant'] ?></td>
            <td><?php echo $row['planted'] ?></td>
            <td><?php echo $row['image'] ?></td>
            <td>
              <a href="editTree.php?id=<?= $row['id'] ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="deleteTree.php?id=<?= $row['id'] ?>" class='btn btn-danger'>Delete</a>
            </td>
          <?php
             }
            }
          ?>
      </table>
    </div>
  </div>
</div>
</form>
<?php require 'footer.php'; ?>
