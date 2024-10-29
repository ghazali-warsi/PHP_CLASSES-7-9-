<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php 
    include "./dbconn.php";
    
    $read = $conn->prepare("SELECT * FROM users");
    $read->execute();
    $rows = $read->fetchAll();
    if($rows)
    {
      
    
    
    ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-success" >
                <tr>
                    <th>SR No</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Age</th>
                    <th>User Address</th>
                    <th>User Contact</th>
                    <th>Action</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
              <?php
              $num = 1;
                foreach($rows as $data)
        {
            ?>
            <!-- <tr>
            <td><?php //echo $data[0] ?></td> 
            <td><?php //echo $data[1] ?></td>
            <td><?php // echo $data[2] ?></td>
            <td><?php //echo $data[3] ?></td>
            <td><?php //echo $data[4] ?></td>
            <td><?php //echo $data[5] ?></td>
        </tr> -->

        <tr>
            <td><?php echo $num ?></td>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['age'] ?></td>
            <td><?php echo $data['address'] ?></td>
            <td><?php echo $data['contact'] ?></td>
            <td><a href="./view.php?view=<?php echo $data['id']?>" class="btn btn-secondary">View</a></td>
            <td><a href="./update.php?update=<?php echo $data['id']?>" class="btn btn-secondary">Update</a></td>
            <td><a href="./delete.php?delete=<?php  echo $data['id']?>" class="btn btn-danger">Delete</a></td>

        </tr>
        <?php
        $num++;
        }
    }
    else
    {
       $display_error = "No User Found";
       ?>
       <div class="col-12 text-center mt-5 bg-primary">
    
       <?php echo $display_error ?>
       </div>
       <?php

    }
         ?>
         
         
              
          </table>
        </div>
    </div>
</div>
</body>
</html>

<?php


?>