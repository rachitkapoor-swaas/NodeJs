<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>


<body>
    <h1>Login</h1>
    <form action="login.php" method='post'>
        <input type="text" name="Email" id="" value='' placeholder="Email">

        <input type="password" name="Password" id="" value='' placeholder="Password">

        <input type="submit" name="login" value="Login">
    </form>
    <?php

    if (isset($_POST["login"])) {
        $Email = $_POST["Email"];
        $Password = $_POST["Password"];

         
 $conn = new mysqli('127.0.0.1:3390', 'root', '','test_db');
 if($conn->connect_error){
     die('Connection Failed: ' .$conn->connect_error);
    
 }else{
        $sql = "SELECT Password FROM formsubmissions WHERE Email ='$Email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
        if ($user) {
            if (password_verify($Password, $user['Password'])) {
                header("Location: users.php");
                
            } else {
                exit;
                header("Location: login.php");
                
            }
        }
    }
    }
    ?>

</body>

</html>