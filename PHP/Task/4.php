<h2>Question 4</h2>
<form action="" method='post'>
    <h4>What does the $_SERVER['REQUEST_METHOD'] variable return?</h4>

    <input type="radio" name="fav_language" value="option 1">
    <label for="option 1">The IP address of the client</label><br>

    <input type="radio" name="fav_language" value="option 2">
    <label for="option 2">The HTTP method used for the request (GET, POST, etc.)</label><br>

    <input type="radio" name="fav_language" value="option 3">
    <label for="option 3">The server's operating system</label><br>

    <input type="radio" name="fav_language" value="option 4">
    <label for="option 4">The server's hostname</label><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php 
    if (isset($_POST['submit'])) {
        if (empty($_POST['fav_language'])) {
            echo "You have to select atleast one";
        } else {
            header("Location: 5.php");
        }
    }
?>