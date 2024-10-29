<?php 

// Non-Parametreized Function 

// definition of function 
function name ()
{
    echo "Qasim Chandio " ;
}

// calling a function 
name();
echo "<br>";
echo "<br>";

// Parameterized function 

// function para($a , $b)
function para($name="Farhan" , $age=20)
{
    echo "<br>";
 echo $name;
    //  echo "<br>";
 echo $age;
 echo "<br>";
}

para(name(), 24);
// para();

// variable function 

$add = function($a , $b)
{
   echo $a+$b."<br>";
};

$add(10 , 50);

// returning function 

function subract($a , $b , $c)
{
   return $a-$b-$c;  
}
echo subract(50,10,20);


?>