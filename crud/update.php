<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    include "./dbconn.php";

    if(isset($_GET['update']))
    {
       $id = $_GET['update'];

       $single = $conn->prepare("SELECT * FROM users WHERE id = '$id' ");
       $single->execute();
       $row = $single->fetchAll();

       if($row)
       {
        foreach($row as $data)
        {
            $name = $data['name'];
            $email = $data['email'];
            $age = $data['age'];
            $address = $data['address'];
            $contact = $data['contact'];
        }
       }
    }

    ?>
    
<div class="container">
    <div class="row">
        <h1>User Update Form</h1>
        <hr>

    </div>
<div class="row">
    <div class="col-9">
        <form action="" method="post">
        <div class="mt-3">
                <label for="id">ID</label>
                <input type="number" id="id" value="<?php echo $id ?>" class="form-control" name="updid" readonly>
            </div>   

        <div class="mt-3">
                <label for="n">Name</label>
                <input type="text" id="n"  value="<?php echo $name ?>" class="form-control" name="updname" placeholder="Enter Name" required>
            </div>
        
            <div class="mt-3">
                <label for="em">Email</label>
                <input type="email" id="em"  value="<?php echo $email ?>" class="form-control" name="updemail" placeholder="Enter Email" required>
            </div>

            <div class="mt-3">
                <label for="ag">Age</label>
                <input type="number" id="ag"  value="<?php echo $age ?>" class="form-control" name="updage" placeholder="Enter Age" required>
            </div>

            <div class="mt-3">
                <label for="ad">Address</label>
                <input type="text" id="ad"  value="<?php echo $address ?>" class="form-control" name="updaddress" placeholder="Enter Address" required>
            </div>

            <div class="mt-3">
                <label for="cn">Contact</label>
                <input type="number" id="cn"  value="<?php echo $contact ?>" class="form-control" name="updcontact" placeholder="Enter Contact Number" required>
            </div>

            <div class="mt-3">
         <button type="submit" class="btn btn-outline-success" value="<?php echo $id ?>" name="upd">Update User</button>      
        </div>
        </form>
    </div>
</div>
</div>
<?php 

if(isset($_REQUEST['upd']))
{   
    $updID = $_REQUEST['upd'];
    $updName = $_REQUEST['updname'];
    $updEmail = $_REQUEST['updemail'];
    $updAge = $_REQUEST['updage'];
    $updAddress = $_REQUEST['updaddress'];
    $updContact = $_REQUEST['updcontact'];

    $update = $conn->prepare("UPDATE users SET name = '$updName' , email = '$updEmail' , age = '$updAge' 
    , address = '$updAddress' , contact = '$updContact' 
    WHERE id = '$updID'");
    $update->execute();
    if($update)
    {
        header("Location:./read.php");
    }
}


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>