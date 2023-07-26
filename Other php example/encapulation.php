<?php
class ATM 
{
    private $casid;
    private $atmid;
    public function pinchange($cid,$apin){
        echo"perform task";
    }
    public function checkbalance($cid,$apin)
    {
        echo"account no;is:$cid your pin is;$apin";
    }
    public function ministatement($cid)
    {
        echo"perform task";
    }
}
    $obj = new ATM();
    $obj -> checkbalance(124235413451,"1*****4424542");

?>