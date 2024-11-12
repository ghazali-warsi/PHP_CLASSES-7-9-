<?php
include (__DIR__ . "/../basic/startlinks.php");
include (__DIR__ ."/../config.php");

?>


<div class="container">
    <div class="row">

<?php
if(isset($_REQUEST['update']))
{
   $id = $_REQUEST['update'];
//    echo $id;
   $fetch = $conn->prepare("SELECT * FROM products WHERE id  = '$id'");
   $fetch->execute();
   $row = $fetch->fetchAll();

   if($row)
   { 

    foreach($row as $data)
    {

    
  ?>

<div class="col-10">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="mt-3">
                    <label for="id">ID</label>
                    <input type="number" value="<?php echo $id?>" readonly  class="form-control " name="prid" id="id" required>
                </div>
                <div class="mt-3">
                    <label for="n">Name</label>
                    <input type="text" value="<?php echo $data['name']?>" placeholder="Enter Product name" class="form-control " name="prname" id="n " required>
                </div>
                <div class="mt-3">
                    <label for="d">Description</label>
                    <input type="text" value="<?php echo $data['description']?>" placeholder="Enter Product Description" class="form-control " name="prdesc" id="d" required>
                </div>

               
                <div class="mt-3">
                    <label for="pr">Price</label>
                    <input type="number" value="<?php echo $data['price']?>" placeholder="Enter Product Price" class="form-control " name="prprice" id="pr" required>
                </div>

                <label for="im" class="mt-3">Image</label>
                <div class=" d-flex">

                    <input type="file" class="form-control " name="primage" id="im" >
                    <img src="./uploads/<?php echo $data['image']?>" style="width: 100px;" alt="">
                </div>


                <div class="mt-3">
                    <button type="submit" name="updateproduct" value="<?php echo $data['id']?>" class="btn btn-primary">Update Product</button>
                </div>
            </form>
        </div>

  <?php
   }
}else
{   ?>
<div class="container mt-5">
    <div class="row mt-5 text-center">
        <div class="col-12 mt-5 bg-secondary">
            <h1>

                <?php 
            echo "No Data Found";?>
    </h1>
        </div>
    </div>
</div>
<?php
}

}

?>
    </div>
</div>

<?php

if(isset($_REQUEST['updateproduct']))
{
  $updID =  $_REQUEST['updateproduct'];
//echo $updID;
$imageFetch = $conn->prepare("SELECT * FROM products WHERE id = '$updID'");
$imageFetch->execute();
$data=  $imageFetch->fetch();
$oldImage = $data['image'] ;

$updName  = $_REQUEST['prname'];
    $updDesc  = $_REQUEST['prdesc']; 
    $updPrice  = $_REQUEST['prprice'];
    $updimage  = $_FILES['primage']['name'];
    // echo $updimage;
    $UpdimageTmp = $_FILES['primage']['tmp_name'];
    $updImageLoc = "./uploads/".$updimage;
if($updimage == null)
{
    $update = $conn->prepare("UPDATE products SET name = '$updName' ,
    description = '$updDesc' , price = '$updPrice' , image = '$oldImage'
    WHERE id = '$updID'");
    $update->execute();
}else
{
    $update = $conn->prepare("UPDATE products SET name = '$updName' ,
    description = '$updDesc' , price = '$updPrice' , image = '$updimage'
    WHERE id = '$updID'");
    $update->execute();
    if($update)
    {
        if(unlink('./uploads/'.$oldImage))
        {
           if(move_uploaded_file($UpdimageTmp , $updImageLoc))
           {
            header("Location:./read.php");
           }
        }
        
    }

}

}

include (__DIR__ . "/../basic/endlinks.php");
?>