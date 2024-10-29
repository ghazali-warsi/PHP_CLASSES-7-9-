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
    if(isset($_REQUEST['view']))
    {
        $viewID = $_REQUEST['view'];

        $read = $conn->prepare("SELECT * FROM users WHERE id = '$viewID'");
        $read->execute();
        $row = $read->fetchAll();
        if($row)
        {

            foreach($row as $data)
            {
           $id = $data['id'];
           $name = $data['name'];
           $email = $data['email'];
           $age = $data['age'];
           $address = $data['address'];
           $contact = $data['contact'];
            }


      
    
    
    ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-success" >
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Age</th>
                    <th>User Address</th>
                    <th>User Contact</th>
                    <th>Action</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            <!-- <tr>
            <td><?php //echo $data[0] ?></td> 
            <td><?php //echo $data[1] ?></td>
            <td><?php // echo $data[2] ?></td>
            <td><?php //echo $data[3] ?></td>
            <td><?php //echo $data[4] ?></td>
            <td><?php //echo $data[5] ?></td>
        </tr> -->

        <tr>
            <td><?php echo $id?></td>
            <td><?php echo $name?></td>
            <td><?php echo $email?></td>
            <td><?php echo $address?></td>
            <td><?php echo $age?></td>
            <td><?php echo $contact?></td>
            <td><a href="./read.php" class="btn btn-secondary">View</a></td>
            <td><a href="./update.php?update=<?php echo $id?>" class="btn btn-secondary">Update</a></td>
            <td><a href="./delete.php?delete=<?php  echo $id?>" class="btn btn-danger">Delete</a></td>
        </tr>
      <?php
        }
    else
    {
       $display_error = "No User Found";
       ?>
       <div class="col-12 text-center mt-5 bg-primary">
    
       <?php echo $display_error ?>
       </div>
       <?php

    }    }
         ?>
         
         
              
          </table>
        </div>
    </div>
</div>
</body>
</html>

<?php


?>