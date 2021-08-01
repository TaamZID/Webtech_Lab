<?php require 'header.php'; 
require_once '../Controller/createTree.php'?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Add Tree</h2>
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
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="stock">Stock</label>
          <input type="int" name="stock" id="stock" class="form-control">
        </div>
        <div class="form-group">
          <label for="variant">Variant</label>
          <input type="text" name="variant" id="variant" class="form-control">
        </div>
        <div class="form-group">
          <label for="planted">Planted</label>
          <input type="int" name="planted" id="planted" class="form-control">
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" name="files[]" id="image" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name ="submit" class="btn btn-info">Add a Tree</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
