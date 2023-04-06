<?php


  $name = $_POST['myname1'];
  $email = $_POST['myemail'];
  $phone = $_POST['myphone'];
  $age = $_POST['myage'];
  $gender = $_POST['mygender'];
  $departure = $_POST['departuredate'];
  $returndate = $_POST['returndate'];
  $destination = implode(", ", $_POST['td']);
  $package = $_POST['locations'];
  


$conn = mysqli_connect('localhost','root');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


mysqli_select_db($conn,'registered users');


$sql = "INSERT INTO registered users (name, email, phone, age, gender, departure, returndate, destination, package)
VALUES ('$name', '$email', '$phone', '$age', '$gender', '$departure', '$returndate', '$destination', '$package')";

if (mysqli_query($conn, $sql)) {
  echo "Registration successful!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>
