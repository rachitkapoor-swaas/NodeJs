<?php

$fptr = fopen("myfile.txt", "r");
while($a=fgetc($fptr)){
    echo $a;
}
echo "End of the file has been reached";
?>
