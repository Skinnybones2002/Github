<?php

$servername = "localhost";
$username = "skinnybones2002";
$password = "DQehoZVYvdXaOlL";
$dbname = "skinnybones2002";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>