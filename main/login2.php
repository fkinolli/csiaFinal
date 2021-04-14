<?php


$con = mysqli_connect("localhost", "root", "") or die ("Failed to connect to MySQL: " . mysqli_error());
$db = mysqli_select_db($con, 'csia') or die ("Failed to connect to MySQL Database: " . mysqli_error());


function SignIn(){

  session_start(); //Starting the session for user profile page

echo "test2";

// $result = mysql_query($con, "SELECT * FROM customers where username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysqli_error($con));
// if (mysql_num_rows($result) == 0) {
//   echo "wrong username or password";
// } else {
//   echo "correct";
// }


if (!empty($_POST['username'])){



  GLOBAL $con;
  //https://stackoverflow.com/questions/44201080/check-user-input-value-with-database-value-in-php

  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM customers where username = '$_POST[username]'";
  $query2 = "SELECT * FROM customers where password = '$_POST[password]'";
  $result1 = mysqli_query($con, $query); //Syntax error: mysqli_query(connection,query);
  $result2 = mysqli_query($con, $query2);
  if(mysqli_num_rows($result1) > 0){
      $row = mysqli_fetch_assoc($result1);
      if($row['password'] == $password){ // if you are using encryption like md5 or anything else then you have to add in this line accordingly
          echo "Good, Logged In!";
      }else{
          echo "Incorrect Password Entered.";
      }
  }else{
      echo "Username Not Found.";
  }







  // $query = mysqli_query($con, "SELECT * FROM customers where username = '$_POST[username]'");
  // $query2 = mysqli_query($con, "SELECT * FROM customers where password = '$_POST[password]'");
  //
  // // $row = mysqli_fetch_array($query) or die("Sorry you entered the wrong credentials, please <a style = color: black; href=login.html>click here</a> to go back!;" . mysqli_error($con));
  //
  //
  // if (mysqli_num_rows($query) == $_POST['username']){
  //   if ((mysqli_num_rows($query2) == md5($_POST['password'])) ) {
  //     header('Location: redirect.html');
  //       exit();
  //       }
  //   } else {
  // echo "wrong password";
  // }

  // if (!empty($row['username'] == $_POST['username']) AND !empty($row['password']) == $_POST['username'])
  // {
  //   $_SESSION['username'] = $row['password'];
  //   echo "signing in";
  //   header('Location: redirect.html');
  //   exit();
  //   // $login = true;
  // }

}

}

if (isset($_POST['submit'])) {
      echo "test1";
  SignIn();
}

?>
