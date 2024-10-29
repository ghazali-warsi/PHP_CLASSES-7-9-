<?php 

// Arithmatic Operators 
$num1 = 5;
$num2 = 2;

// $res = $num1 + $num2;
// $res = $num1 - $num2;
// $res = $num1 * $num2;
// $res = $num1 / $num2; // division
// $res = $num1 % $num2; // modulus
// $res = $num1 ** $num2; Exponentiation 
// echo $res;


// Assignment operators 
// echo $num1 ."<br>";
// $num1 += $num2;  // $num1 = $num1 + $num2
// $num1 -= $num2;
// $num1 *= $num2;
// $num1 /= $num2;
$num1 %= $num2;
// echo $num1; 

// Comparision Operators  /
echo "<h1> Comparision Operators</h1>";

// $val1 = 25;
// $val2 = '25';
// echo $val1 == $val2;
// echo $val1 === $val2;
// echo $val1 != $val2;
// echo $val1 !== $val2;
// echo $val1 < $val2;
// echo $val1 > $val2;
// echo $val1 <= $val2;
// echo $val1 >= $val2;
// conditions
// if($val1 === $val2)
// {
//     echo "Condition is true <br>";
// } else
// {
//     echo "Condition is false <br>";
// } 

// if($val1 == $val2)
// { 
//     echo "nothing";
//     if($val2 < $val1)
//     {
//         echo "Something";
//     }else{
//         echo "inner if condition is false <br>";
//     }
// }else{
//     echo "outer if condition is false";
// }

// $res = $val2 > $val1;
// $res = $val2 >= $val1;
// $res = $val2 === $val1;
// if($res)
// {
//   echo "true";
// }else {
// echo "false";
// }

// $sql_query = "SELECT * FROM users";
// $insert_query = "INSERT INTO users (name , email, age) VALUES ('Faraz','faraz@gmail.com','25')";
// echo $sql_query . "<br>";
// echo $insert_query;

// Logical Operators 
// And Or Not 
$val1 = 25;
$val2 = '25';
$val3 = 30;

if($val1 === $val2 && $val3 > $val2 && $val2 <= $val3 )
{
    echo "All Condition is true <br>";
}
else{
    echo  "one or more condition is false <br>";
}

if($val1 === $val2 || $val3 > $val2 || $val2 > $val3 )
{
    echo "one or more Condition is true <br>";
}
else{
    echo  "All is condition is false <br>";
}

// if(!($val1 === $val2 && $val1 < $val2 && $val3 > $val2))
// {
//     echo "one or more Condition is true <br>";
// }
// else{
//     echo  "All is condition is false <br>";
// }


?>