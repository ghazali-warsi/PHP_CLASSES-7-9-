<?php 

// class base 
// {
//    function display()
//    {
//     echo "This is basic class";
//    }
// }

// $obj = new base();
// $obj->display();

// static class 

class base1 {
  public $age = 18;
    static $name = "Aliyan";
    static function show()
    { 
        // echo $a+$b;
        echo self::$name;
    }
}

class base2 extends base1 {

   static function get()
    {
        echo parent::show();
    }
}

base2::get();

// base1::show();
// echo base1::$name;



?>