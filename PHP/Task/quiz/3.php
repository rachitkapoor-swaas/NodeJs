<h2>Question 3</h2>
<form action="" method='post'>
    <h4>Which function is used to check if a variable is an array in PHP?</h4>

    <input type="radio" name="fav_language" value="option 1">
    <label for="option 1">is_array()</label><br>

    <input type="radio" name="fav_language" value="option 2">
    <label for="option 2">array_check()</label><br>

    <input type="radio" name="fav_language" value="option 3">
    <label for="option 3">is_type_array()</label><br>

    <input type="radio" name="fav_language" value="option 4">
    <label for="option 4">check_array()</label><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php 
    if (isset($_POST['submit'])) {
        if (empty($_POST['fav_language'])) {
            echo "You have to select atleast one";
        } else {
            header("Location: 4.php");
        }
    }
?>