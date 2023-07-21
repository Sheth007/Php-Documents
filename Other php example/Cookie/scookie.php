<?php
    $name="Uday";
    $city="Rajkot";
    $state="Gujarat";
    $zip=360007;
    if(isset($name) and strlen($name)>1)
    {
        setcookie("arycookie[name]",$name);
        setcookie("arycookie[city]",$city);
        setcookie("arycookie[state]",$state);
        setcookie("arycookie[zip]",$zip);
    }
    else
    {
        echo "Error in redirection";
    }
?>