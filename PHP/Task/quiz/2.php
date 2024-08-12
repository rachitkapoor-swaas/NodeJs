<h2>Question 2</h2>
<form action="" method='post'>
    <h4>What is the correct way to include a PHP file named "header.php" at the beginning of a page?</h4>

    <!-- <input type="radio" name="fav_language" value="option 1">
    <label for="option 1">include("header.php");</label><br>

    <input type="radio" name="fav_language" value="option 2">
    <label for="option 2">php require("header.php"); </label><br>

    <input type="radio" name="fav_language" value="option 3">
    <label for="option 3">Both a and b are correct</label><br>

    <input type="radio" name="fav_language" value="option 4">
    <label for="option 4">Neither a nor b</label><br> -->
    <?php
    $array = array(
        "option1" => '<?php include("header.php")?>',
        "option2" => '<?php require("header.php") ?>',
        "option3" => 'Both a and b are correct',
        "option4" => 'Neither a nor b'
    );
    foreach ($array as $key => $value) {
        echo ('<input type = "radio" name="fav_language"' . htmlspecialchars($key) . '>' . htmlspecialchars($value) . '<br><br>');
    }
    ?>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['fav_language'])) {
        echo "You have to select atleast one";
    } else {
        header("Location: 3.php");
    }
}

?>