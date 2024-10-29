<?php 
// What is Array 
// A collection values of same or different datatypes

// Indexed Array
// $arr = [10, 20 ,'karachi' , true];
// $arr1 = [10,20,50,60];
// echo $arr . "<br>";
// var_dump($arr);
// echo "<pre>";
// print_r($arr);
// echo '</pre>';

// Associative Array 
// key and value pairs 
// $arr2 = 
// [
//   'name'=>'Faiz',
//   'age'=>25,
//   'Email'=>'faiz@gmail.com'
// ];
// echo "<pre>";
// print_r($arr2);
// echo '</pre>';

// foreach($arr2 as $key => $value)
// {
//     echo $key ." ". $value ."<br>";
// }

// foreach($arr as $key => $value)
// {
//     echo $key ." ". $value ."<br>";
// }

// Multidimensional Array 

$arr = ['id'=> 10,
        'name'=> [
          'Farhan',
          'Sohail',
          'Raza'
        ]  
        ];

for($x=0; $x<3; $x++)
{
  // echo $arr['name'][$x]."<br>";
}


// Array Methods 

$arr3 = [10,20,30,50,90,70];
echo array_sum($arr3);
echo "<br> <pre>";
print_r($arr3);
echo "</pre><br>";

array_push($arr3 , 80,120,150,160);
echo "<br> <pre>";
print_r($arr3);
echo "</pre><br>";

array_pop($arr3);
echo "<br> <pre>";
print_r($arr3);
echo "</pre><br>";

array_splice($arr3 , 5);
echo "<br> <pre>";
print_r($arr3);
echo "</pre><br>";
?>