<?php
  session_start();
  require("db/configDB.inc.php");

  $username = mysql_real_escape_string($_SESSION['username']);
  $password = mysql_real_escape_string($_SESSION['password']);
  $firstname = mysql_real_escape_string($_SESSION['firstnamee']);
  $lastname = mysql_real_escape_string($_SESSION['lastnamee']);
  $email = mysql_real_escape_string($_SESSION['email']);

  $con=mysqli_connect(null, DB_USER, '', "CodeMuse", null, "/cloudsql/animated-guard-617:mydb"); //DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
  // Check connection
  if (mysqli_connect_error()) 
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 

  $rows = "\"$username\", \"$firstname\", \"$lastname\", \"$password\", \"$email\", \"NE\"";

  $sql = "INSERT INTO user(username, firstName, lastName, password, email, stateAbbr) VALUES ($rows)";

  if (!mysqli_query($con,$sql)) 
  {
    die('Error: ' . mysqli_error($con));
  }


  mysqli_close($con);
  echo "<html><head><script type='text/javascript'> window.parent.location.href = 'profile.php'; </script></head></html>"; 
?>
