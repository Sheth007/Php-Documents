<html>
    <body>
        <form action="form2data.php" method="post">
            Enroll No.:- <input type="text" name="eno"> <br><br>

            Roll No.:- <input type="text" name="rno"> <br><br>

            D.O.B:- 
            <select>
            <?php 
                for($i=1;$i<=31;$i++)
                {
                    echo "<option value=$i>$i</option>";
                }
            ?>         
            </select>
            <select>
            <?php 
                for($m=1;$m<=12;$m++)
                {
                    echo "<option value=$m>$m</option>";
                }
            ?>         
            </select>
            <select>
            <?php 
                for($y=1999;$y<=2023;$y++)
                {
                    echo "<option value=$y>$y</option>";
                }
            ?>         
            </select>
            <br><br>

            Address :- <textarea> </textarea> <br><br>

            <input type="submit">
        </form>
    </body>
</html>
