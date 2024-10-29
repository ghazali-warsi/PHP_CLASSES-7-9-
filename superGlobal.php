

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
            <div class="col-9">
                <!-- <form action="./method.php" method="get"> -->
                <!-- <form action="./method.php" method="post">
                     -->
                     <form action="./files.php" method="post" enctype="multipart/form-data">

                <div class="mt-3">
                    <label for="n">Name</label>
                    <input type="text" placeholder="Enter Name" name="name" class="form-control">
                </div>


                
                <div class="mt-3">
                    <label for="em">Email</label>
                    <input type="email" placeholder="Enter Email" name="email" class="form-control">
                </div> 

            
                <div class="mt-3">
                    <label for="ag">Age</label>
                    <input type="number" placeholder="Enter Age" name="age" class="form-control">
                </div> 
                <div class="mt-3">
                    <label for="im">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="mt-3">
                    <label for="fl">File</label>
                    <input type="file" name="file" class="form-control">

                </div> 


                
                <div class="mt-3">
                   <button class="btn btn-success" name="btn" type="submit">Submit</button>
                </div>

                </form>
            </div>
        </div>
      

<?php
// $_GET[];
// $_POST[];
// $_REQUEST[];
// $_SESSION[];
// $_FILES[];
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>"
?>


</body>
</html>