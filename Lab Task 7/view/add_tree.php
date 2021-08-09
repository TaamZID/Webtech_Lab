<?php require 'header.php'; 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../CSS/add_tree.css">
    <style>
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h2>&nbsp; ADD TREE</h2>
    <form style="border:2px;  padding: 1em;" method="post" method="POST" enctype="multipart/form-data"  action="../controller/add_tree_controller.php">
      <fieldset>

        ID:<input type="text" name="id" class="form-control">
        <br>

        Name:<input type="text" name="name" class="form-control">
      
        <br>

        Stock: <input type="text" name="stock" class="form-control">
        
        <br>

        Variant: <input type="text" name="variant" class="form-control">
        
        <br>

        Planted: <input type="text" name="planted"  class="form-control"/>
        <br>

        <input type="file" name="image"><br><br>
        <input type="submit" name="addTree" value="Add" class="btn btn-info">

      </fieldset>
    </form>
  </body>
</html>
