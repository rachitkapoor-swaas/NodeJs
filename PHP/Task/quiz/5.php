<h2>Question 5</h2>
<form action="" method='post'>
    <h4>Which of the following is the correct syntax for a basic PHP comment?</h4>

    <!-- <input type="radio" name="fav_language" value="option 1">
    <label for="option 1"> // This is a comment</label><br>

    <input type="radio" name="fav_language" value="option 2">
    <label for="option 2">*</label><br>

    <input type="radio" name="fav_language" value="option 3">
    <label for="option 3"># This is a comment</label><br>

    <input type="radio" name="fav_language" value="option 4">
    <label for="option 4"> /* This is a comment */</label><br> -->

    <?php
        $array = array("option1"=>"// This is a comment",
                    "option2"=>"*",
                    "option3"=>"#This is a comment",
                    "option4"=>"/* This is a comment */",
                    );
            
            foreach ($array as $key => $value) {
                echo ('<input type = "radio" name="fav_language"' .htmlspecialchars($key).'>'.htmlspecialchars($value).'<br><br>');
            }
    ?>

    <input type="submit" name="submit" value="Submit">
</form>


<?php 
    if (isset($_POST['submit'])) {
        if (empty($_POST['fav_language'])) {
            echo "You have to select atleast one";
        } else {
            header("Location: gratitude.php");
        }
    }
?>