<?php
    session_start();
?>
<?php
    echo "Session Started <br>";
        echo "Your name is : ".$_SESSION['name'] = "ums <br>";
    echo "Session Unset <br>";
        session_unset();
    echo "Session Destroyed";
        session_destroy();
?>