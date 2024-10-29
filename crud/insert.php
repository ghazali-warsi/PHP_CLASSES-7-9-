<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row">
        <h1>User Form</h1>
        <hr>

    </div>
<div class="row">
    <div class="col-9">
        <form action="" method="post">
           
        <div class="mt-3">
                <label for="n">Name</label>
                <input type="text" id="n" class="form-control" name="username" placeholder="Enter Name" required>
            </div>
        
            <div class="mt-3">
                <label for="em">Email</label>
                <input type="email" id="em" class="form-control" name="useremail" placeholder="Enter Email" required>
            </div>

            <div class="mt-3">
                <label for="ag">Age</label>
                <input type="number" id="ag" class="form-control" name="userage" placeholder="Enter Age" required>
            </div>

            <div class="mt-3">
                <label for="ad">Address</label>
                <input type="text" id="ad" class="form-control" name="useraddress" placeholder="Enter Address" required>
            </div>

            <div class="mt-3">
                <label for="cn">Contact</label>
                <input type="number" id="cn" class="form-control" name="usercontact" placeholder="Enter Contact Number" required>
            </div>

            <div class="mt-3">
         <button type="submit" class="btn btn-outline-success" name="add">Add User</button>      
        </div>
        </form>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php 

include "./dbconn.php";

if(isset($_REQUEST['add']))
{
   $name = $_REQUEST['username'];
   $email = $_REQUEST['useremail'];
   $age = $_REQUEST['userage'];
   $address = $_REQUEST['useraddress'];
   $contact = $_REQUEST['usercontact'];
 
   $email_check = $conn->prepare("SELECT * FROM users WHERE email = '$email' "); 
   $email_check->execute();
   $data = $email_check->fetchAll();
// email is column name which is present in database table and 
// $email is php variable which is store data of input field of email
   if(count($data) > 0)
   {
    
//   <script>
//     alert("Email Already Exist");
//  </script> 
     
     echo "Email Already Exist"; 
    
   }
   else
   {
   $insert = $conn->prepare("INSERT INTO users (name,email,age,address,contact)
   VALUES ('$name','$email','$age','$address','$contact')");
   $insert->execute();
   if($insert)
   {
    // echo "Data Inserted successfully";
    header("location:./read.php");
   }else{
    "data not inserted";
   }
   }


}


?>


</body>
</html>