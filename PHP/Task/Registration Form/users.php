<!DOCTYPE html>
<html>
<head>
    <title>HTML Table Example</title>
</head>
<body>

<h2>Sample HTML Table</h2>
<table>
    <tr>
        <th>Name</th>
        <th>DOB</th>
        <th>Email</th>
        <th>PhoneNumber</th>
        <th>Address</th>
    </tr>

<?php

    $conn = mysqli_connect("127.0.0.1:3390","root","","test_db");
    if ($conn-> connect_error) {
        die("Connection Failed". $conn->connect_error);
    }

    $sql = "SELECT Name,DOB,Email,PhoneNumber,Address from formsubmissions";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0) {
        while($row = $result-> fetch_assoc()) {
            echo "<tr><td>".$row["Name"]."</td><td>".$row["DOB"]."</td> <td>".$row["Email"]."</td><td>".$row["PhoneNumber"]."</td><td>".$row["Address"]."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 result";
}
$conn->close();
?>


</body>
</html>
