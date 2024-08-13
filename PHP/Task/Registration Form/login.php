<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>


<body>
    <h1>Login</h1>
    <form action="" method = 'post'>
        <input type="text" name="username" id="" value='' placeholder="username">
    
        <input type="text" name="password" id="" value='' placeholder="password">
    
        <input type="submit" name="" value="Login">
    </form>

    <?php

        if(isset($_POST["login"])) {
            $username=$_POST["username"];
            $Password=$_POST["password"];

            require_once "database.php";
            $sql = "SELECT * FROM SubmissionID WHERE Name='$username'";
            $result = mysql_query($sql);
            
        }
    ?>
</body>
</html>