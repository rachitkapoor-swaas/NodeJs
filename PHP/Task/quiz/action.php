<?php

//Hardcore Value
$user = "swaas"; 
$pass = "swaas@123";

if(isset($_POST)){
    //HTML Value
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($pass,  
    PASSWORD_DEFAULT); 
    if($user==$username && $pass == $password){
        {
            header("Location: 1.php");
        }
    }else
    {
        header("Location: quiz.php");
    }
}
   
?>
