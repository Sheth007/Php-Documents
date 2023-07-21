<?php
    if(isset($_COOKIE['arycookie']))
    {
        print_r($_COOKIE['arycookie']);
        echo "<br><br> 
        <font face='verdana' size='2'>
        your name should appear after the welcome message above if cookie is available 
        </font>";
    }
    else
    {
        echo "no cookie is set";
    }
?>