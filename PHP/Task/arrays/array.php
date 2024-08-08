<?php

$color = array('white', 'green', 'red', 'blue', 'black');
echo $color[0];
echo '<br>';
echo $color[1];
echo '<br>';
echo $color[2];
echo '<br>';
echo $color[3];
echo '<br>';
echo $color[4];
echo '<br>';

echo '<br>';
echo '<br>';

$favColor = array('Shubham' => 'red', 'Rohan' => 'brown', 'Harry' => 'white', 'Rachit' => 'Orange', 'Rahul' => 'Green');
echo $favColor['Harry'];
echo '<br>';
echo $favColor['Rohan'];

echo '<br>';
echo '<br>';


foreach ($favColor as $key => $value) {
    echo "<br>Favourite Color of $key is $value";
}

echo "<br>";
echo "<br>";

echo "Welcome <br>";

$multiDim = array(
    array(2, 5, 7, 9),
    array(1, 2, 3, 4),
    array(4, 3, 2, 1),
    array(9, 8, 7, 6)
);

for ($i = 0; $i < count($multiDim); $i++) {
    echo var_dump($multiDim[$i]);
    echo "<br>";
}
echo "<br>";
for ($i = 0; $i < count($multiDim); $i++) {
    for ($j = 0; $j < count($multiDim[$i]); $j++) {
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}