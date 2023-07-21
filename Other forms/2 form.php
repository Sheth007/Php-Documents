<?php
$erremail=null; 
if(isset($_POST['submit']))
{
    $eemail =$_POST["email"]; 
    if(preg_match('/^[0-9 a-z A-Z]+(.|_)[0-9 a-z A-Z]*\@(yahoo|gmail|co|in|rediff)\.(com|in)$/',$eemail)) 
    { 
      $erremail="Valid Email"; 
    } 
    else 
    { 
      $erremail="Enter the Proper Email Id";
    } 
}
?>
<p style="color:red">* Mandatory to fill</p>
<form action="#" method="post">                              
    First name : <input type="text" name="fname" require> <b style="color:red">*</b>
    <br><br>

    Last name : <input type="text" name="lname">
    <br><br>

    Birth date : 
    <select>
        <option>Day</option>
            <?php 
                 for($i=1;$i<=31;$i++)
                {
                    echo "<option value=$i>$i</option>";
                }
             ?>         
    </select>
    <select>
        <option>Month</option>
             <?php 
                 for($i=1;$i<=12;$i++)
                {
                  echo "<option value=$i>$i</option>";
                }
            ?>         
    </select>
    <select>
        <option>Year</option>
            <?php 
                for($i=2000;$i<=2023;$i++)
                {
                    echo "<option value=$i>$i</option>";
                }
            ?>         
    </select>
    <br><br>

    User name : <input type="text" name="uname" require> <b style="color:red">*</b>
    <br><br>

    <label for="email">Email:</label>
    <input type="text" name="email" id="email" placeholder="your email"><?= "<font color='red'>$erremail</font>"?>
    <?php
        $erremail=null; 
        if(isset($_POST['submit']))
        {
            $eemail =$_POST["email"]; 
            if(preg_match('/^[0-9 a-z A-Z]+(.|_)[0-9 a-z A-Z]*\@(yahoo|gmail|co|in|rediff)\.(com|in)$/',$eemail)) 
            { 
                $erremail="done"; 
            } 
            else 
            { 
                $erremail="Enter the Proper Email Id";
            } 
        }
    ?>
    <br><br>

    Website : <input type="text" name="web">
    <br><br>

    Password : <input type="password" name="pass" require> <b style="color:red">*</b>
    <br><br>

    Re_password : <input type="password" name="rpass" require> <b style="color:red">*</b>
    <br><br>

    <input type="checkbox" require> I agree to terms & conditions.
    <br><br>

    <input type="submit" value="Sign Up" name="submit" require>
</form>   

<h3> ::: Final Output ::: </h3>  

<?php
if(isset($_POST['submit']))
{

    echo $fname=$_POST['fname']."<br><br>";
    echo $lname=$_POST['lname']."<br><br>";
    echo $uname=$_POST['uname']."<br><br>";
    echo $web=$_POST['web']."<br><br>";
    echo $pass=$_POST['pass']."<br><br>";
    echo $rpass=$_POST['rpass'];
}
?>