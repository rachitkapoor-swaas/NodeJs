<?php
echo "Hello", "world!";
echo '<br><br>';
print "hello baby"; //can only take a single argument and returns '1'.
?> 


<?php

// Indexed Array
$array1 = array(1, 2, 3, 4);
// print_r($array1);
echo '<br><br>';
var_dump($array1);
$array2 = [1, 2, 3, 4, 5];
echo '<br><br>';
print_r($array2);

echo '<br><br>';
echo '<hr>';
var_dump($array2);
echo '<br><br>';
echo '<hr>';


//  Associative Array 
$array3 = array(
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3"
);

$array4 = [
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3"
];

var_dump($array3);
echo '<br><br>';
echo '<hr>';
print_r($array3);
echo '<br><br>';
echo '<hr>';
print_r($array4);


$array5 = array(
    array("a", "b", "c"),
    array("d", "e", "f")
); // Old syntax
$array6 = [
    ["a", "b", "c"],
    ["d", "e", "f", "g"]
];  // Short syntax (PHP 5.4+)

var_dump($array5);
echo '<br><br>';
echo '<hr>';
var_dump($array6);


?>



<?php
$string = "apple,banana,cherry";
$array = explode(",", $string);

// Print the array using print_r
echo '<pre>'; // Optional: Formats the output for better readability
print_r($array);
echo '</pre>';

// Alternatively, print the array using var_dump
echo '<pre>'; // Optional: Formats the output for better readability
var_dump($array);
echo '</pre>';
?>





<?php 
    //Pass by value
    function addFive($number) {
        $number = $number + 5;
    }
    $num = 10;
    addFive($num);
    echo $num;
    // $num is still 10  
?>

<?php
    //Pass by reference 
    function addFives(&$number) {
        $number += 5;
    }
    $num = 10;
    echo $num;
    addFives($num);
    // $num is now 15
?>