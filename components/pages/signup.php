<?php
$servername = "server841";
$username = "u872517390_merabazar";
$password = "Qwerty123";
$dbname = "u872517390_mera_bazar_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO signup values ('".$_POST["uname"]."', '".$_POST["email"]."', '".$_POST["psw"]."')";

if ($conn->query($sql) === TRUE) {
  echo "Signed Up successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="index.html"><h3>back to homepage</h3></a>