<?php require 'header.php'; 
require_once '../Controller/showTrees.php';?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All Trees</h2>
      <form method="POST" action="showSearch.php" style="text-align: right;">
      <h2>Search Tree</h2>
      <input type="text" style="height:36px; width:170px" name="tamzid"/>
      <input type="submit" name="search" class="btn btn-info" value="Search"/>
    </form>
    <br>
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
        <?php foreach($tree as $trees): ?>
          <tr>
            <td><?= $trees->id; ?></td>
            <td><?= $trees->name; ?></td>
            <td><?= $trees->stock; ?></td>
            <td><?= $trees->variant; ?></td>
            <td><?= $trees->planted; ?></td>
            <td><?= $trees->image; ?></td>
            <td>
              <a href="editTree.php?id=<?= $trees->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="deleteTree.php?id=<?= $trees->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
