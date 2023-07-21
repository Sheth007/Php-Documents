<?php
    if(isset ($_GET['submit']))
    {
        echo "welcome".$_GET['name']."<br>";
        echo"you are".$_GET['weight']."kgs in weight";
        exit();
    }
?>
<html>
<body>
    <form action="#" method="GET">
        name : <input type="text" name="name">
        weight : <input type="text" name="weight">
        <input type="submit" name="submit">
    </form>
</body>
</html>