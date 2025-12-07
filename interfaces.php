<?php
interface pr1{
    function calc($a,$b);
}
interface pr2{
    function sub($c,$d);
}
class chid implements pr1,pr2{
    function calc($a, $b)
    {
        echo $a+$b."<br>";
    }
    function sub($c, $d)
    {
        echo $c-$d;
    }
}

$obj=new chid();
$obj->calc(10,20);
$obj->sub(4,10);
?>