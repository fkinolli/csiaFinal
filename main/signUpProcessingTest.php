<?php
$servername = "localhost";
$database = "csia";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
$signup = FALSE;
// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


//Defining the variables

$email = $_GET['email'];
$username = $_GET['username'];
$password = $_GET['password'];
$password_hashed = md5($password);
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$address = $_GET['address'];
$country = $_GET['country'];
$city = $_GET['city'];
$state = $_GET['state'];
$phone_number = $_GET['phone_number'];

//Optional part

if (isset($_POST['submit'])){
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_hashed = md5($password);
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $phone_number = $_POST['phone_number'];
}

$sql = "insert into customers (email, username, password, first_name, last_name, address, country, city, state, phone_number) values ('$email', '$username', '$password_hashed', '$first_name', '$last_name', '$address', '$country', '$city', '$state', '$phone_number')";
if (mysqli_query($conn, $sql)) {
      echo "Successfully Inserted";
      $signup = TRUE;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
