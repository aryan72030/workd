<?php
trait hello{
    function prin(){
        echo "hello everyone";
    }
}
trait by{
    function say(){
        echo "by by everyone";
    }
}
class base{
    use hello,by;
}
class base2{
    use hello;
}

$obj=new base();
$obj1=new base2();
$obj->prin();
$obj->say();
$obj1->prin();
?>