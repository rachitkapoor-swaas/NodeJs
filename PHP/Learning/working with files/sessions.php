<?php 

session_start();
$_SESSION['username']="Harry";
$_SESSION['favCategory']="Books";
echo "We have saved your session";

?>