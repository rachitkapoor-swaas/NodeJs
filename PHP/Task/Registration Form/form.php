<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 600px;
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">User Registration Form</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" name="Name" class="form-control" value="<?php echo isset($_POST['Name']) ? htmlspecialchars($_POST['Name'], ENT_QUOTES) : '';?>">
            </div>

            <div class="form-group">
                <label for="DOB">DOB:</label>
                <input type="text" name="DOB" class="form-control" value="<?php echo isset($_POST['DOB']) ? htmlspecialchars($_POST['DOB'], ENT_QUOTES) : '';?>">
            </div>

            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="text" name="Email" class="form-control" value="<?php echo isset($_POST['Email']) ? htmlspecialchars($_POST['Email'], ENT_QUOTES) : '';?>">
            </div>

            <div class="form-group">
                <label for="PhoneNumber">Phone Number:</label>
                <input type="text" name="PhoneNumber" class="form-control" value="<?php echo isset($_POST['PhoneNumber']) ? htmlspecialchars($_POST['PhoneNumber'], ENT_QUOTES) : '';?>">
            </div>

            <div class="form-group">
                <label for="Address">Address:</label>
                <input type="text" name="Address" class="form-control" value="<?php echo isset($_POST['Address']) ? htmlspecialchars($_POST['Address'], ENT_QUOTES) : '';?>">
            </div>

            <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if (isset($_POST["Submit"])) {
            // Retrieve and sanitize form data
            $Name = isset($_POST['Name']) ? htmlspecialchars($_POST['Name'], ENT_QUOTES) : '';
            $DOB = isset($_POST['DOB']) ? htmlspecialchars($_POST['DOB'], ENT_QUOTES) : '';
            $Email = isset($_POST['Email']) ? htmlspecialchars($_POST['Email'], ENT_QUOTES) : '';
            $Phone = isset($_POST['PhoneNumber']) ? htmlspecialchars($_POST['PhoneNumber'], ENT_QUOTES) : '';
            $Address = isset($_POST['Address']) ? htmlspecialchars($_POST['Address'], ENT_QUOTES) : '';

            // Display the form data
            echo "<div class='alert alert-info mt-4' role='alert'>";
            echo "<h4 class='alert-heading'>Your given values are as follows:</h4>";
            echo "<p><strong>Name:</strong> " . $Name . "</p>";
            echo "<p><strong>DOB:</strong> " . $DOB . "</p>";
            echo "<p><strong>Email:</strong> " . $Email . "</p>";
            echo "<p><strong>Phone Number:</strong> " . $Phone . "</p>";
            echo "<p><strong>Address:</strong> " . $Address . "</p>";
            echo "</div>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
