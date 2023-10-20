<?php



// echo $_POST['firstname']."<br>";
// echo $_POST['lastname']."<br>";
// echo $_POST['email']."<br>";

// Insert into the database table MyGuests

include 'dv.php';


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['email']}')";


if (mysqli_query($conn, $sql)) {
 header ("location: index.php?message=guestadded");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


// Redirect Back to the main page with a GET variable to display success message


?>