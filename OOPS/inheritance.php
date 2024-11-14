<?php
// inheritance 
class A {
    function signup()
    {
        echo "this is sign up function <br>";
    }
}



class B extends A {
    function Login()
    {
        echo "this is login function <br>";
    }
}



class  C extends B {
    function db_connection()
    {
        echo "this is db function <br>";
    }
}



class D extends C {
    function get()
    {
        echo "this is get function <br>";
    }
}

// $obj = new A();
// $obj1 = new B();
// $obj2 = new C();
// $obj2->db_connection();
// $obj2->get();
$obj3 = new D();
$obj3->db_connection();
$obj3->get();
$obj3->signup();
$obj3->login();
?>