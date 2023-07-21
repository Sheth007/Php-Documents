<?php
$errname=null;
$errphone=null;
$erremail=null; 
$errpass=null;
  if(isset($_POST['smit'])) 
  { 
$nme = $_POST["name"]; 
$phone =$_POST["phoneNumber"]; 
$eemail =$_POST["email"]; 
$ps = $_POST["password"]; 
    if(preg_match('/^[a-z A-Z]*$/',$nme)) 
    { 
      $errname=""; 
    } 
    else 
    { 
      $errname="Must be String";
    }  
     if(preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',$ps)) 
    { 
      $errpass=""; 
    } 
    else 
    { 
      $errpass="Password must include Character,symbol,digits";
    } 

    if(preg_match('/^[0-9]{10}$/',$phone)) 
    { 
      $errphone=""; 
    } 
    else 
    { 
      $errphone="Enter the Proper number";
    }

    if(preg_match('/^[0-9 a-z A-Z]+(.|_)[0-9 a-z A-Z]*\@(yahoo|gmail|co|in|rediff)\.(com|in)$/',$eemail)) 
    { 
      $erremail=""; 
    } 
    else 
    { 
      $erremail="Enter the Proper Email Id";
    } 
    if($errname=="" and $errphone=="" and $erremail=="" and $errpass=="") 
    { 
      echo $nme; 
      echo $phone; 
      echo $eemail; 
      echo $ps;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title> 
  <!-- <link rel="stylesheet" href="Index.css">-->
</head>
<body>
    <div class="container">
        <form name="registration" class="registartion-form" method="post">
          <table>
            <tr>
              <td><label for="name">Name:</label></td>
              <td><input type="text" name="name" id="name" placeholder="your name" ><?= "<font color='red'>$errname</font>" ?></td>
            </tr>
            <tr>
              <td><label for="email">Email:</label></td>
              <td><input type="text" name="email" id="email" placeholder="your email"><?= "<font color='red'>$erremail</font>"?></td></td>
            </tr>
            <tr>
              <td><label for="password">Password:</label></td>
              <td><input type="password" name="password" id="password"><?="<font color='red'>$errpass</font>"?></td>
            </tr>
            <tr>
              <td><label for="phoneNumber">Phone Number:</label></td>
              <td><input type="text" name="phoneNumber" id="phoneNumber"><?= "<font color='red'>$errphone</font>" ?></td></td>
            </tr>
            <tr>
              <td><label for="gender">Gender:</label></td>
              <td>Male: <input type="radio" name="gender" value="male">
                Female: <input type="radio" name="gender" value="female">
                Other: <input type="radio" name="gender" value="other"></td>
            </tr>
            <tr>
              <td><label for="language">language</label></td>
              <td>
                <select name="language" id="language">
                  <option value="">Select language</option>
                  <option value="English">English</option>
                  <option value="Spanish">Spanish</option>
                  <option value="Hindi">Hindi</option>
                  <option value="Arabic">Arabic</option>
                  <option value="Russian">Russian</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><label for="zipcode">Zip Code:</label></td>
              <td><input type="text" name="zipcode" id="zipcode"></td>
            </tr>
            <tr>
              <td><label for="about">About:</label></td>
              <td><textarea name="about" id="about" placeholder="Write about yourself..."></textarea></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="smit" class="submit" value="Register" /></td>
            </tr>
          </table>
        </form>
      </div>
</body>
</html> 

