<!DOCTYPE html>
<html>
<head>
    <title>Data from Database</title>
    <style>
            body {
            background-image: url('img.jpg');
            background-color: rgb(245, 245, 174);
        }
        </style>
</head>
<body>
    <h2>User List</h2>
    <a href="indexx.php">home</a><br>
    <a href="index.php">Upload Details</a><br>
            <a href="access.php">Get Specific Details</a><br>
            
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "survey2";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM survey2 ";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row["name"] . " - Mobile: " . $row["mobile"] .
                " - Home Number: " . $row["homenum"] . " - Members Number: " . $row["members_no"] .
                " - Aadhar Number: " . $row["aadhar_number"] . " - Borewell Facility: " . $row["borewell_facility"] . "<br>";
            // Output or manipulate the fetched data here
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn); // Close the database connection
    ?>
</body>
</html>
