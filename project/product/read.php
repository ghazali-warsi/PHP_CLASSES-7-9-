<?php
include (__DIR__ . "/../basic/startlinks.php");
include (__DIR__ ."/../config.php");

?>

<div class="container">
    <div class="row">

    <?php

$show = $conn->prepare("SELECT * FROM products");
$show->execute();
$data =  $show->fetchAll();

if(count($data)>0)
{
    ?>
    <div class="col-12">
    <table class="table table-striped table-success table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach($data as $row){
           ?>
            <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td>
            <img src="./uploads/<?php echo $row['image'] ?>" alt="">    
            </td>
            <td> <a class="btn btn-primary" href="./update.php?update=<?php echo $row['id'] ?>" >Update</a> </td>
            <td><a class="btn btn-danger" href="./delete.php?delete=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
        <?php
        }
}
?>





               
            </table>
        </div>
    </div>
</div>



<?php


include (__DIR__ . "/../basic/endlinks.php");
?>