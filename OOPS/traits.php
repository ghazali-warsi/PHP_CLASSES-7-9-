<?php 

trait signup 
{
    function register()
    {
        echo "Example of traits";
    } 
}

class A {
   use signup;
}

$objA = new A();
$objA->register();

class B {
use signup;
}
?>