<?php 
// LOOPS in php 
// for loop 

// for ($x = 0; $x < 10 ; $x++)
// {

//   if($x == 5)
//   {
//     break;
//   }
//   echo $x ."<br>";
// }


// for ($x = 0; $x < 10 ; $x++)
// {

//   if($x == 5)
//   {
//     continue;
//   }
//   echo $x ."<br>";
// }

// for($x = 10 ; $x<10; $x++)
// {
//   echo $x."<br>";
// }

// DO WHILE 

// $x = 10;
// do{
//   echo $x."<br>";
//   $x++;
// }
// while($x<10);

// while loop 

// $y = 5 ;
// while($y<=15)
// {
//   echo $y . "<br>";
//   $y++;
// }

$arr = [10,20,50,60,90,40];
// echo $arr[0];
// echo count($arr);
// for($x=0;$x<count($arr);$x++)
// {
//   echo $arr[$x]."<br>";
// }
// $x = 0;
// while($x<count($arr))
// {
//   echo $arr[$x]."<br>";
//   $x++;
// }

// $x = 0;
// do
// {
//   echo $arr[$x]."<br>";
//     $x++;
// }
// while($x<count($arr));

// foreach($arr as $data)
// {
//   echo $data."<br>";
// }

// Nested loop 

// $arr = ['id' => [1,2,3,4,5,] , 'name' => ['farhan', 'raza','aqeel' , 'faiz' , 'habib' ] ];


// for($x = 0;$x<5; $x++)
// {

//   echo $x. " outer loop" . "<br>";
//   for($y=0;$y<5; $y++)
//   {
//     echo $y ." Inner Loop" . "<br>";
//   }
// }

// GO to  Statement 

$x = 10;

echo "before got to statement <Br>";
  goto a;
for ($y=0;$y<$x;$y++)
{
echo $y . "<br>";
}


echo "9";
echo 10;
echo 90;


a:
echo "After goto statement";

for ($y=0;$y<$x;$y++)
{
echo $y . "<br>";
}
?>