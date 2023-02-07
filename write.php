<?php 

$filename = "newfile.txt";

$file = fopen($filename, "w");
$mytext = " This is the content which I want to store or read";
if($file ==false){
    echo "not able to open he file ";
    exit();
}
fwrite($file,$mytext );
fclose($file);
