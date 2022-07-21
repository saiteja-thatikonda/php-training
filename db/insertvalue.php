<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Dbsai";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Saiteja (firstname, lastname, email)
VALUES ('kishore', 'kumar', 'kishore@example.com');";
$sql .= "INSERT INTO Saiteja (firstname, lastname, email)
VALUES ('sravanth', 'Ranga', 'Sravanth@example.com');";
$sql .= "INSERT INTO Saiteja (firstname, lastname, email)
VALUES ('Hemanth', 'kumar', 'hemanth@yahoo.com')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
