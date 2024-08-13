<?php 

$string = "This is a strong mind";
preg_match("/(strong) mind/", $string, $matches);
echo $matches[1]; // Output: strong



?>