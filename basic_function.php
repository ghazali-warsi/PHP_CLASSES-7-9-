<?php
$name = " Usman Khan ";

// echo strlen($name);

// $today = date('D-M-Y');
// echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set('Asia/Karachi');
$today = date('l-M-Y / h-i-sa');
// $today = date('l-M-Y / H-i-sa');
echo $today;
echo "<br>";


// $d=mktime(11, 14, 54, 8, 12, 2014);
// echo "Created date is " . date("Y-m-d h:i:sa", $d);


$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

?>