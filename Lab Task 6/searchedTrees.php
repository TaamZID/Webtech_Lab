<?php 
require '../Model/db_connect.php';

if(isset($_POST['search'])){
    $tamzid = $_POST['tamzid'];
    $query = $conn->prepare("SELECT * FROM tree WHERE name LIKE '$tamzid' or variant LIKE '$tamzid'");
    $query->execute();
    while($row=$query->fetch()) {?>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['stock'] ?></td>
            <td><?php echo $row['variant'] ?></td>
            <td><?php echo $row['planted'] ?></td>
            <td><?php echo $row['image'] ?></td>
        <?php
    }
}
?>


