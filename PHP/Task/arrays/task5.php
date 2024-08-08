<?php

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);

$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

$keys_and_values = [];
foreach($keys as $key => $value) {
    $keys_and_values[$value]= $values [$key ."value"];
}
print_r( $keys_and_values);
?>