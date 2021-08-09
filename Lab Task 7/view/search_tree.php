<?php require 'header.php'; 
?>
<!DOCTYPE html>
<html>
  <body>
    <!-- [SEARCH FORM] -->
    <form method="post" action="../controller/find_tree_controller.php">
      <h1>SEARCH TREE</h1>
      <input type="text" name="name" required/>
      <input type="submit" name="find_tree" value="Search By Name"/>
    </form>
  </body>
</html>
