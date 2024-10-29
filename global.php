<?php

$name = "Usman <br>";  // global
 
function name($n)
{
   global $name;  //get global variable in a function
   $name = $n;  // Reassign value of global variable
    echo $name ."<br>";

    $age = "18"; // local variable
}
echo $age;

name("Aliyan");
echo $name;


?>