<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Name:
        <input type="text" name="Name" value="<?php echo isset($_POST['Name']) ? htmlspecialchars($_POST['Name'], ENT_QUOTES) : '';?>"><br><br>

        Email:
        <input type="text" name="Email" value="<?php echo isset($_POST['Email']) ? htmlspecialchars($_POST['Email'], ENT_QUOTES) : '';?>"><br><br>

        Website: 
        <input type="text" name="website" value="<?php echo isset($_POST['website']) ? htmlspecialchars($_POST['website'], ENT_QUOTES) : '';?>"><br><br>

        Classes:
        <textarea name="Classes" rows="5" cols="40"><?php echo isset($_POST['Classes']) ? htmlspecialchars($_POST['Classes'], ENT_QUOTES) : '';?></textarea><br><br>
        Gender:
        <input type="radio" name="Gender" <?php if (isset($_POST['Gender']) && $_POST['Gender']=="male") echo "checked"; ?> value="male">Male
        <input type="radio" name="Gender" <?php if (isset($_POST['Gender']) && $_POST['Gender']=="female") echo "checked"; ?> value="female">Female
        
        <br><br>

        <input type="Submit" name="Submit" value="Submit">
        <br><br>

        <?php

        if (isset($_POST["Submit"])) {
            $name = $_POST['Name'];
            $email = $_POST['Email'];
            $website = $_POST['website'];
            $Classes = $_POST['Classes'];
            $Gender =  $_POST['Gender'];

            echo "<h2>Your given values are as follows:</h2><br>";

            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Website: " . $website . "<br>";
            echo "Classes: " . $Classes . "<br>";
            echo "Gender: " . $Gender . "<br>";
        }

        ?>
    </form>
</body>

</html>