<?php
// Example 1 - Add two numbers (RECIEVES TWO ARGUMENTS)
function add(int $a, int $b){
    return $a + $b;
}
echo add(5,20) ;
echo "<br>";

// Example 2 - Using concatenation

function add_some_extra(&$string) {
    $string = 'Add something. ' . $string;
}

$str = 'I have added this';
add_some_extra($str);

echo $str;
echo "<br>";

// outputs ‘Add something. I have added this'


// Example 3 - Calculate total marks and average marks
function processMarks($sumArr){
    $sum = 0; 
    foreach($sumArr as $value){
        $sum = $sum+$value;
    }
    return $sum;
}

function avgMarks($sumArr){
    $sum=0;
    $i=1;
    foreach($sumArr as $value){
        $sum=$sum+$value;
        $i++;
    }
    return $sum/$i;
}

$rohan = [98,92,91,90,17];
$sumrohan = processMarks($rohan);
$avgrohan = avgMarks($rohan);
echo "Total marks scored by Rohan out of 600 is $sumrohan <br>";
echo "Average marks scored by Rohan out of 600 is $avgrohan <br>";

$rachit = [97,99,92,91,10];
$sumrachit = processMarks($rachit);
$avgrachit = avgMarks($rachit);
echo "Total marks scored by Rachit out of 600 is $sumrachit <br>";
echo "Average marks scored by Rachit out of 600 is $avgrachit <br>";

?>