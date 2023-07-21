<html>
    <body>
        <form action="form1data.php" method="post">

            Name : <input type="text" name="name"> <br><br>

            Mobile No. : <input type="text" name="mono"> <br><br>
            
            Gender :<br>
           <input type="radio" id="Gender1" name="Gender[]" value="Male">
           <lable for="Gender1">Male</lable><br>

           <input type="radio" id="Gender2" name="Gender[]" value="Female">
           <lable for="Gender2">Female</lable><br><br>

            Hobbies :<br>
            <input type="checkbox" id="Hobbies1" name="Hobbies[]" value="cricket">
           <lable for="Hobbies1">cricket</lable><br>

           <input type="checkbox" id="Hobbies2" name="Hobbies[]" value="music">
           <lable for="Hobbies2">music</lable><br>

           <input type="checkbox" id="Hobbies3" name="Hobbies[]" value="travel">
           <lable for="Hobbies3">travel</lable><br>

           <input type="checkbox" id="Hobbies4" name="Hobbies[]" value="cook">
           <lable for="Hobbies4">cook</lable><br>

           <input type="checkbox" id="Hobbies5" name="Hobbies[]" value="gaming">
           <lable for="Hobbies5">gaming</lable><br>

            <input type="submit" name="submit">

        </form>
    </body>
</html>