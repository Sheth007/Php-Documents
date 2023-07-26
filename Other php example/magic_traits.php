<?php 
trait demo 
{
    function method()
    {
        echo __trait__;
    }
}
class company
{
    use demo;
}
$a=new company();
$a->method();
?>