<?php
interface gen{
    public function gender();
}

abstract class testclass{
public function hello($name, $age);
}
class myclass extends testclass implements gen{
   function hello($name, $age){
      echo "My name is $name and my age is $age";
      }
      public function gender(){
        echo "Male";
    }
}

$a=new myclass();
$a->hello("Uday",20);

?>