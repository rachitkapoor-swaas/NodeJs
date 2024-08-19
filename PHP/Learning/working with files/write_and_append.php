<?php


//Writing to a file
$fptr = fopen("myfile2.txt", "w");
fwrite($fptr, "This is the best file on this planet. Please dont argue with me on this one.\n"); 
fwrite($fptr, "This is another content\n"); 
fwrite($fptr, "This is another content3"); 
fclose($fptr);

//Appending to a file 
$fptr1 = fopen("myfile2.txt", "a");
fwrite($fptr1,"This is being appended to the file \n");
fclose($fptr1);
?>