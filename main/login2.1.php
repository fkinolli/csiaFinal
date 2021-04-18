<?php


$con = mysqli_connect("localhost", "root", "") or die ("Failed to connect to MySQL: " . mysqli_error());
$db = mysqli_select_db($con, 'csia') or die ("Failed to connect to MySQL Database: " . mysqli_error());


function SignIn()
{

  session_start(); //Starting the session for user profile page

  if (!empty($_POST['username'])) {
    GLOBAL $con;
    $query = mysqli_query($con, "SELECT * FROM customers where username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysqli_error($con));

    $row = mysqli_fetch_array($query) or die("Sorry you entered the wrong credentials, please <a style = color: black; href=logIn.php>click here</a> to go back!;" . mysqli_error($con));

    if (!empty($row['username']) AND !empty($row['password']))
    {
      $_SESSION['username'] = $row['password'];
      header("Location: redirect.html");
    exit();
    }
  }
}
if (isset($_POST['submit'])) {
  #SignIn();
  header("Location: redirect.html");
}

?>
