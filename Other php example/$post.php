<?php
    if($_POST['name'] | $_POST['email'])
    {
        echo "Your name is : ".$_POST['name']."<br>";
        echo "Your email is : ".$_POST['email'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name" require><br>
        E-mail: <input type="text" name="email" require><br>
        <input type="submit">
    </form>
</body>
</html>