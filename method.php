

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
// if(isset($_GET['btn']))
// {
//     // print_r($_GET);
//     $name = $_GET['name'];
//     $email = $_GET['email'];
//     $age = $_GET['age'];
// if(isset($_POST['btn']))
// {
    // print_r($_GET);
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $age = $_POST['age'];


session_start();
session_destroy();

print_r(
$_SESSION['color']
);
if(isset($_REQUEST['btn']))
{
    // print_r($_GET);
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $age = $_REQUEST['age'];


    // echo "User Name is : " . $name . "<br>";
    // echo "User Email is : " . $email . "<br>"; 
    // echo "User Age is : " . $age . "<br>";
    
    ?>
    <div class="container">
        </div>
        <div class="row text-center">
        
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                </tr>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $age ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
    <?php

}

?>
</body></html>