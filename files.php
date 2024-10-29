<?php

if(isset($_REQUEST['btn']))
{
     $name = $_REQUEST['name'];
     $email = $_REQUEST['email'];
     $age = $_REQUEST['age'];
     $image = $_FILES['image']['name'];
     $file = $_FILES['file']['name'];

   $filelocation = "./file/" . $file;
   $imagelocation = "./image/" . $image;

   $filetmp = $_FILES['file']['tmp_name'];
   $imagetmp = $_FILES['image']['tmp_name'];

move_uploaded_file($filetmp , $filelocation); // upload files server
move_uploaded_file($imagetmp , $imagelocation);  // upload files server


    // print_r($_FILES);
}

?>