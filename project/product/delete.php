<?php
include (__DIR__ . "/../config.php");
if(isset($_REQUEST['delete']))
{
    $delID = $_REQUEST['delete'];
    // echo $deliID;
    $delete = $conn->prepare("DELETE FROM products WHERE id = '$delID' ");
    $delete->execute();
    if($delete)
    {
        header("Location:./read.php");
    }
}

?>