<?php
session_start();

// echo "We are deleting ID:".$_POST['id'];

include 'dv.php';


// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id='{$_POST['id']}'";



if (mysqli_query($conn, $sql)) {
$_SESSION['message'] = 'guestdeleted';
header("Location: index.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>