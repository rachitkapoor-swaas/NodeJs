<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
        <form action="formaction.php" method="post">
        <input type="text" name="num1" id="" placeholder="Enter First Number">
        <input type="text" name="num2" id="" placeholder="Enter Second Number">
        <select name="myDropdown" class="my-dropdown">
            <option value="0">Operation</option>
            <option value="1">Add</option>
            <option value="2">Subtract</option>
            <option value="3">Multiply</option>
            <option value="4">Div</option>
            <option value="5">Mod</option>
        </select>
        <input type="submit" name="submit" value="Calculate">
    </form>
</body>
</html>
