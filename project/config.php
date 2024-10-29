<?php 


$server = "localhost";
$database = "tts_project";
$username = "root";
$password = "";


$conn =  new PDO("mysql:host=$server;dbname=$database" , $username , $password);
if(!$conn)
{
    echo "No Connection found";
}
?>