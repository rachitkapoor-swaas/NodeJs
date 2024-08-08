<?php
function insert_item_foreach($array, $item, $position) {
    // Check if position is valid
    if ($position < 0 || $position > count($array)) {
        return "Invalid position";
    }

    $new_array = [];
    $inserted = false;
    foreach ($array as $key => $value) {
        if ($key === $position) {
            $new_array[] = $item;
            $inserted = true;
        }
        $new_array[] = $value;
    }
    if (!$inserted) {
        $new_array[] = $item; // Insert if position is at the end
    }
    return $new_array;
}

// Example usage:
$original_array = array(1, 2, 3, 4, 5);
$new_array = insert_item_foreach($original_array, '$', 3);

echo "Original array : \n";
print_r($original_array);

echo '<br>';

echo "After inserting '$' the array is : \n";
print_r($new_array);


?>