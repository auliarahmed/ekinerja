<?php
$servername = "localhost";
$username = "ukpbj_ekinerja";
$password = "lp53t4l4k4b";
$dbname = "ukpbj_ekinerja";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tb_app (data)
VALUES ('Doe')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>