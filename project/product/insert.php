<?php

include (__DIR__ . "/../basic/startlinks.php");
include (__DIR__ ."/../config.php");
?>


<div class="container">
    <div class="row">
        <h1>Product Form</h1>
        <div class="col-12">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mt-3">
                    <label for="n">Name</label>
                    <input type="text" placeholder="Enter Product name" class="form-control " name="prname" id="n " required>
                </div>

                <div class="mt-3">
                    <label for="d">Description</label>
                    <input type="text" placeholder="Enter Product Description" class="form-control " name="prdesc" id="d" required>
                </div>

                <div class="mt-3">
                    <label for="r">Ratings</label>
                    <input type="number" placeholder="Enter Product Ratings" class="form-control " name="prrate" id="r" required>
                </div>
                <div class="mt-3">
                    <label for="pr">Price</label>
                    <input type="number" placeholder="Enter Product Price" class="form-control " name="prprice" id="pr" required>
                </div>

                <div class="mt-3">
                    <label for="im">Image</label>
                    <input type="file" class="form-control " name="primage" id="im" required>
                </div>


                <div class="mt-3">
                    <button type="submit" name="addproduct" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php


if(isset($_REQUEST['addproduct']))
{
    $prname = $_REQUEST['prname'];
    $prdesc = $_REQUEST['prdesc'];
    $prrate = $_REQUEST['prrate'];
    $prprice = $_REQUEST['prprice'];
   $primage = $_FILES['primage']['name'];
    $image_tmp = $_FILES['primage']['tmp_name'];
    $image_loc = "./uploads/".$primage; 

    $name_check = $conn->prepare("SELECT * FROM products WHERE name = '$prname'");
    $name_check->execute();
    $name =  $name_check->fetchAll();

    if(count($name) > 0 )
    {
    echo "Same Name Not Applicable";
    }
    else
    {
        $insertProduct = $conn->prepare("INSERT INTO products (name , description ,ratings , price , image)
        VALUES ('$prname','$prdesc','$prrate','$prprice','$primage')");
        $insertProduct->execute();
        if($insertProduct)
        {
         move_uploaded_file($image_tmp , $image_loc);
        }else{
            echo "No Product Added To the Database";
        }
    }
   



}


include (__DIR__ . "/../basic/endlinks.php");

?>

