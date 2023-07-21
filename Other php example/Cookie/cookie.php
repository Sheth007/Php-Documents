<?php
    setcookie("user", "Uday", time() + 3600);
?>
<html>
    <body>
        <?php
            if(isset($_COOKIE["user"]))
            {
                echo "Sorry cookie is not found";
            }
            else
            {
                echo "<br> cookie value :".$_COOKIE("user");
                print_r($_COOKIE);
            }
        ?>
    </body>
</html>