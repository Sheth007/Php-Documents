<?php   
    class person
    {
        public $name;
        public $age;
        public $gender;
        function __construct($nm, $ag, $gen)
        {
            $this ->name = $nm;
            $this ->age = $ag;
            $this ->gender = $gen;
        }
         function getName()
        {
            return $this ->name;
        }
         function getage()
        {
            return $this ->age;
        }
         function getgender()
        {
            return $this ->gender;
        }
    }
    $obj = new person("Uday", "19", "Male");
    echo "Hi" . $obj->getName() . "I am " . $obj->getAge() . "I am a " .$obj->getGender();
?>