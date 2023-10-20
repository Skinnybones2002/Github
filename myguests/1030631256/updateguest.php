<?php



include 'dv.php';


$sql = "UPDATE MyGuests SET firstname='{$_POST['firstname']}', lastname='{$_POST

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>