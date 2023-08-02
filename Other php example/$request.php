<?php
if ($_POST['fname']) 
{
    echo "Name is : ".$_POST['fname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
</head>
<body>
<form method="post" action="$request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>
</html>