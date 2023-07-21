<?php

header("Content-type:application/pdf");

// It will be called downloaded.pdf
/*content disposition are inline or attachment. inline option open the file but do not download.
while attachment option download the file.
whether the content is anticipated to be displayed inline in the browser. It is on a web page, as part of a web page, or as a downloaded and saved attachment.

The HTTP Content-Disposition header directs the client in terms of whether the HTTP response is displayed in the browser or saved in local storage. if u directly displayed in the browser then 'inline' option can be used and if u want to saved in local storage then 'attachment' option can be used.......
*/


header("Content-Disposition:inline;filename='ora.pdf'");
readfile('ora.pdf');


//header('Location: http://www.javatpoint.com/');  

//header('Refresh: 10; url=http://www.javatpoint.com/'); 


?>