<?php
    class testclass
    {
        public function test1()
        {
            return new class()
            {
                public function test2()
                {
                    echo "Test2 method of nested anonymous class";
                }
            };
        }
    }
    $obj = new testclass();
    $obj -> test1() -> test2();
?>