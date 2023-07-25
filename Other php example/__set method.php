<?php
    class employee{
        private $mail;
        private $name;
        public function __construct($name, $mail){
            $this -> ename = $ename;
            $this -> mail = $mail;
        }
    }
    public static function __set_state(array $array){
        $obj = new employee;
        $obj -> ename = $array['ename'];
        $obj -> mail = $array['mail'];
        return $obj;
    }
    $obj4 = new employee("abc", "abc@abc.com");
    var_export($obj4);
?>