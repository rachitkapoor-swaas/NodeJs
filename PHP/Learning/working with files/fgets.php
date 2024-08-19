<?php

$fptr = fopen("myfile.txt", "r");
while($a=fgets($fptr)){
    echo $a;
    echo "<br>";
}
echo "End of the file has been reached.";

echo "<br>";


$fptr = fopen("myfile.txt","r");
while($a=fgetc($fptr)){
    echo $a;
    if($a== "."){
        break;
}
}
fclose($fptr);
?>