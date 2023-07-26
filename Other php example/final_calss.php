<?php 
namespace computer__science_purtal;
class date_modify{
    public function getclassname()
    {
        return __class__;
    }    
    public function method()
    {
        return __method__;
    }
    public function namespace()
    {
        return __namespace__;
    }
}
echo "demo::class";
$object=new demo();
echo $obj->getclassname();
echo $obj->method();
echo $obj->namespace();
?>