 <?php
function line()
{
echo "<br>*****************************************************<br>";
}
echo "<h1>Demo for File heandling function</h1>";
line();
$filename="a.txt";
$fopenfile=fopen("a.txt","r");
echo "(1)fread(file handler variable, int length)<br>";
$read_data=fread($fopenfile,filesize("a.txt"));
echo filesize("a.txt")."<br>"; 
echo $read_data;
fclose($fopenfile);
line();

$filename="a.txt";
$fopenfile=fopen("a.txt","w");
echo "(2)fwrite(file handler variable, string value)<br>";
$write_data=fwrite($fopenfile,"This is demo file");
echo "write success...Plz check in ". $filename." file";
//fclose($fopenfile);
line();

echo "(3)file_exists(string file name)<br>";
if(file_exists("aa.txt"))
echo "file exists";
else
echo "file not exists";
line();

echo "(4)is_readable( string file name)<br>";
if(is_readable("a.txt"))
echo "Yes";
else
echo "No";
line();

echo "(5)is_writeable( string file name)<br>";
if(is_writeable("a.txt"))
echo "Yes";
else
echo "No";
line();

echo "(6)fgets(file handler variable, int length)<br>";
$fopenfile=fopen("a.txt","r");
echo(fgets($fopenfile,3));
line();
while(!feof($fopenfile))
{
$data=fgets($fopenfile);
echo $data;
}
line();

echo "(7)fgetc(file handler variable)<br>";
$fopenfile=fopen("a.txt","r");
while(false !==($char=fgetc($fopenfile)))
{echo $char."<br>";}
line();

echo "(8)Copy(string oldfilename,string newfilename)";
copy("a.txt","b.txt");
line();

echo "(9) unlink(string filename)";
unlink ("b.txt");
line();

echo "(10) rename(string oldfilename,string newfilename)";
rename("a.txt","abc.txt");
line();
?> 