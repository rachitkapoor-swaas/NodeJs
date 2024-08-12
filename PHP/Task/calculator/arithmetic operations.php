<!DOCTYPE html>
<html>
<head>
    <title>Number Calculator</title>
</head>
<body>
    <?php
    $number1 = '';
    $number2 = '';
    $result = '';
    $result2 = '';
    $result3 = '';
    $result4 = '';
    $result5 = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number1 = $_POST['Number1'];
        $number2 = $_POST['Number2'];
        $result = (int)$number1 + (int)$number2;
        $result2 = (int)$number1 - (int)$number2;
        $result3 = (int)$number1 * (int)$number2;
        $result4 = (int)$number1 / (int)$number2;
        $result5 = (int)$number1 % (int)$number2;
    }
    ?>

    <form method="post" action="">
        <label for="number1">Number 1:</label>
        <input type="text" name="Number1" id="number1" value="<?php echo $number1; ?>">
        <br>
        <label for="number2">Number 2:</label>
        <input type="text" name="Number2" id="number2" value="<?php echo $number2; ?>">
        <br>
        <br>
        <input type="submit" name="submit" value="Calculate">
        <br>
        <br>


        <label for="addition">Addition:</label>
        <input type="text" name="addition" id="addition" value="<?php echo $result; ?>" readonly>
        <br>

        <label for="subtraction">Subtraction:</label>
        <input type="text" name="subtraction" id="subtraction" value="<?php echo $result2; ?>" readonly>
        <br>

        <label for="multiplication">Multiplication:</label>
        <input type="text" name="multiplication" id="multiplication" value="<?php echo $result3; ?>" readonly>
        <br>

        <label for="division">Division:</label>
        <input type="text" name="division" id="division" value="<?php echo $result4; ?>" readonly>
        <br>

        <label for="modulus">Modulus:</label>
        <input type="text" name="modulus" id="modulus" value="<?php echo $result5; ?>" readonly>
        <br>
    </form>
</body>
</html>
