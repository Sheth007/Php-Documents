<?php
    $name=$_POST['name'];
    $mono=$_POST['mono'];
    $Gender=$_POST['Gender'];
    $Hobbies=$_POST['Hobbies'];

    echo"<br> Name is :".$name;
    echo"<br> MobileNo is :".$mono."<br>";
    print_r($Gender);
    echo"<br>";
    print_r($Hobbies);
?>