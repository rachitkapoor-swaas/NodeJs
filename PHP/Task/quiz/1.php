<h2>Question 1</h2>

<form action="" method="post">
    <h4>Which of the following is NOT a valid PHP data type?</h4>

    <input type="radio" name="datatype" value="option 1">
    <label for="option 1">Integer</label><br>

    <input type="radio" name="datatype" value="option 2">
    <label for="option 2">String</label><br>

    <input type="radio" name="datatype" value="option 3">
    <label for="option 3">Float</label><br>

    <input type="radio" name="datatype" value="option 4">
    <label for="option 4">Boolean</label><br>

    <input type="submit" name="next" value="Submit">
</form>

<?php

    if (isset($_POST['next']))
    {
        if(empty($_POST['datatype'])){
            echo "You have to select atleast one";
        }
        else{ 
            header("Location: 2.php");
        }    
    }
    $options=array('Integer','String', 'Float', 'Boolean');
    echo $option[0];
    echo $option[1];
    echo $option[2];
    echo $option[3];
    // foreach($options as $values){
        
    //     }

    
?>