<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['myDropdown'];

    if (empty($num1) || empty($num2)) {
        echo "Please enter both numbers.";
        exit;
    }

    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Please enter valid numbers.";
        exit;
    }
    
    switch ($operation) {
        case "1":
            $result = $num1 + $num2;
            echo "Result (add): " . $result;
            break;
        case "2":
            $result = $num1 - $num2;
            echo "Result (subtract): " . $result;
            break;
        case "3":
            $result = $num1 * $num2;
            echo "Result (Multiply): " . $result;
            break;
        case "4": 
            if ($num2 == 0) {
                echo "Division by zero is not allowed.";
            } else {
                $result = $num1 / $num2;
                echo "Result (Divide): " . $result;
            }
            break;
        case "5": 
            if ($num2 == 0) {
                echo "Modulo by zero is not allowed.";
            } else {
                $result = $num1 % $num2;
                echo "Result (Modulus): " . $result;
            }
            break;
        default:
            echo "Invalid operation.";
    }
}
