<?php
function changeCaseArray($array, $case) {
  $newArray = [];
  foreach ($array as $key => $value) {
    $newArray[$key] = ($case === 'lower') ? strtolower($value) : strtoupper($value);
  }
  return $newArray;
}

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

echo "Values are in lower case.\n";
print_r(changeCaseArray($Color, 'lower'));
echo '<br>';
echo "\nValues are in upper case.\n";
print_r(changeCaseArray($Color, 'upper'));
?>