<?php

$server = "localhost";
$password = "";
$username = "root";
$database = "tts_crud";

$conn = new PDO("mysql:host=$server;dbname=$database" , $username , $password);
$conn->setAttribute(PDO::ERRMODE_WARNING , PDO::ERRMODE_EXCEPTION);
if(!$conn)
{
    echo "No Connection found";
 }
//else
// {
//     echo "Connection built";
// }




?>