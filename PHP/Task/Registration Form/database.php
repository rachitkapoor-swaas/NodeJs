<?php
$Name = $_POST["Name"];
$DOB = $_POST["DOB"];
$Email=$_POST["Email"];
$PhoneNumber=$_POST["PhoneNumber"];
$Address=$_POST["Address"];
$Password=$_POST["Password"];
 
 $conn = new mysqli('127.0.0.1:3390', 'root', '','test_db');
if($conn->connect_error){
    die('Connection Failed: ' .$conn->connect_error);
}else{

    $Password = password_hash($Password, PASSWORD_DEFAULT);

    $sql ="INSERT INTO `formsubmissions` (`Name`, `DOB`,`Email`, `PhoneNumber`, `Address`, `Password`) VALUES ('".$Name."', '".$DOB."' ,'".$Email."','".$PhoneNumber."','".$Address."','".$Password."')";
   
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: login.php");
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
 
    $conn->close();
}
?>