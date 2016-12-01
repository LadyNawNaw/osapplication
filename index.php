<?php
define('DB_HOST', getenv('OPENSHIFT_DB_HOST'));
define('DB_USER',getenv('OPENSHIFT_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_DB_DBNAME'));
// Create connection
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE TABLE os (
name VARCHAR(30) NOT NULL PRIMARY KEY,
image VARCHAR(30) NOT NULL,
description VARCHAR(50) NOT NULL,
)";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO os (name, image, description)
VALUES ('Android', 'android.png', 'nb utilisateur:10000000')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfullyy";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO os (name, image, description)
VALUES ('ios', 'ios.png','nb utilisateur: 80000')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO os (name, image,description)
VALUES ('BlackBerry', 'blachberry.png','nb utilisateur:500')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO os (name, image, description)
VALUES ('WindowsPhone', 'windowsphone.png','nb utilisateur: 90')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>
