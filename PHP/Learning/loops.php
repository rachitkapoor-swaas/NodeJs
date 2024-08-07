// While Loops

<?php
    $i=0;
    while($i<5){
        echo $i+1;
        echo "<br>";
        $i++;
    }
?>

// For Loops
<br>

<?php 

    for($i=1;$i<10;$i++){
        echo "The number is $i <br>";
    }

?>

//Do-while Loops
<br>
<?php
    $j=20;
    do{
        echo ("Printing $j");
        $j++;
    }
    while
        ($j<5);
    
?>

//For-Each Loops

<br>
<?php

    $arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");

    for( $i=0; $i<count($arr); $i++){
        echo $arr[$i];
        echo"<br>";
    }
    
    foreach ($arr as $value){
        echo "$value<br>";
    }

?>



