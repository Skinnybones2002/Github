<?php

session_start();
include 'dv.php';


$sql = "UPDATE MyGuests SET firstname='{$_POST['firstname']}', lastname='{$_POST['lastname']}',email='{$_POST['email']}' WHERE id='{$_POST['id']}'";

if ($conn->query($sql) === TRUE) {
  $_SESSION['message'] === 'guestupdated';

  header("Location: index.php");
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>