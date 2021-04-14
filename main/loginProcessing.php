<?php
$servername = "localhost";
$database = "csia";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Esstablishing Variables
$username = $_POST['username'];

$password = $_POST['password'];
$password_hashed = md5($password);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

function SignIn()
{

//starts the session for the user profile
session_start();

//checks the username from login form
  if(!empty($_POST['username'])) {
    GLOBAL $conn;
    $query = mysqli_query($conn, "SELECT * FROM customers where username = '$_POST[username]' AND password = md5('$_POST[password]')") or die(mysqli_error($conn));

  $row = mysqli_fetch_array($query) or die("Wrong Username and Password Entered" . mysqli_error($conn));
}

  if(!empty($row['username']) AND !empty($row['password']))
{
    $_SESSION['username'] = $row['password'];
}

header("location: redirect.html");
//
// if ($verified = TRUE) {
//
// }

}




// function SignIn()
// {
//
//   session_start(); //Starting the session for user profile page
//
//   if (!empty($_POST['user'])) {
//     GLOBAL $con;
//     $query = mysqli_query($con, "SELECT * FROM users where username = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysqli_error($con));
//
//     $row = mysqli_fetch_array($query) or die("Sorry you entered the wrong credentials, please <a style = color: black; href=login.html>click here</a> to go back!;" . mysqli_error($con));
//
//     if (!empty($row['username']) AND !empty($row['password']))
//     {
//       $_SESSION['username'] = $row['password'];
//       header("Location: redirect.php");
//     exit();
//     }

 ?>
