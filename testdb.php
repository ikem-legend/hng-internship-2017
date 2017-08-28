<?php

/* Database config */

$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "hng";

// Create connection
$conn = mysqli_connect($server, $db_user, $db_pass, $db_name);

// Check connection
 if(mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
  }

// Connect to DB, read and display something
$query = "SELECT * FROM interns";
$result = mysqli_query($conn, $query);

while ($res = mysqli_fetch_assoc($result)) {
	echo "The intern's first name is " . $res['fname'] . ", last name is " . $res['lname'] . " and age is " . $res['age'] . "<br>";
}

?>