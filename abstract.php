<?php
abstract class prentclass{
    public $name;

    abstract function calc($a,$b);
}
class childclass extends prentclass{
    function calc($a, $b)
    {
        echo $a+$b;
    }
}
$obj=new childclass();
$obj->calc(10,20);
?>