<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        name:
        <input type="text" name="name" value="">
        age:
        <input type="text" name="age" value="">
    </form>
</body>
</html>

<?php
    $_SERVER['REQUEST_METHOD'] == 'POST';
    $_SERVER['REQUEST_METHOD'] ==  'GET';

    
   if( $_REQUEST["name"] || $_REQUEST["age"] ) {
      echo "Welcome ". $_REQUEST['name']. "<br />";
      echo "You are ". $_REQUEST['age']. " years old.";
   }
?>