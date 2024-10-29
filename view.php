<?php 

session_start();
if($_SESSION['color'])
{
    print_r($_SESSION['color']);
}
else{
    echo "No Session Found";
}

?>