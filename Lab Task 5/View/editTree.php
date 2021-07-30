<?php require 'header.php'; 
require_once '../Controller/editTree.php'?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Tree</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $tree->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="stock">Stock</label>
          <input type="int" value="<?= $tree->stock; ?>" name="stock" id="stock" class="form-control">
        </div>
        <div class="form-group">
          <label for="variant">Variant</label>
          <input value="<?= $tree->variant; ?>" type="text" name="variant" id="variant" class="form-control">
        </div>
         <div class="form-group">
          <label for="planted">Planted</label>
          <input type="int" value="<?= $tree->planted; ?>" name="planted" id="planted" class="form-control">
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Tree</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
