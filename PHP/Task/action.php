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
            echo "Login Successfully <br>"  .$hash;
        }
    }else
    {
        echo "Unable to login";
    }
}
   
?>
