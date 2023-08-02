<?php
    file_get_contents("http://localhost");
    $var=$http_response_header;
    foreach($var as $key=>$val)
    echo "<p> $key=>$val </p>";
?>