<?php  

// Interface In php

// multpile inheritance 

// class A{

// }

// class B extends A{

// }


// Class C extends A{

// }


interface A 
{
    function show1();   // declare or  incomplete method
}

interface B 
{
    function find();    // declare or  incomplete method
}


// class A 
// {
//     function show1();   // declare or  incomplete method
// }

// class B 
// {
//     function find();    // declare or  incomplete method
// }


class C implements A , B {
    
    public function show1()   // implement or complete
    {
          echo "This is show function which in a interface class <br>";
    } 

    public function find()    // implement or complete
    {
        echo "This is find function which in a interface class <br>";
    }
}

$objA = new A();
$obj = new C();
$obj->show1();
$obj->find();

?>