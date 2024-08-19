<?php 

$fptr = fopen("myfile.txt", "r");
echo $fptr;
echo "<br>";
echo var_dump($fptr);


if(!$fptr){
   die("Unable to open the file"); 
}

echo "<br>";
$content = fread($fptr, 13);
echo $content;
echo "<br>";


$content = fread($fptr, filesize("myfile.txt"));
fclose($fptr);
echo $content;

?>