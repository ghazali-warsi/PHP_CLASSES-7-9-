<?php
 
include "./dbconn.php";

if(isset($_REQUEST['delete']))
{
   $delID = $_REQUEST['delete'];
  $delete = $conn->prepare("DELETE FROM users WHERE id = '$delID'");
  $delete->execute();
  if($delete)
  {
    header("Location:./read.php");
  }
}

?>