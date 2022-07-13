
<?php
echo readfile("defination.txt")."<br>";

$file = fopen("defination.txt", "r") or die("Unable to open file!");
echo fread($file,filesize("defination.txt"));
fclose($file);




?>
