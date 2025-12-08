<?php
require 'product.php';
require 'test.php';

function wow(){
    echo "wow from index file.<br>";
}

$obj=new test\product();
// $obj1=new pro\product();

wow();
pro\wow();
?>