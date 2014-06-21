<?php
  session_start();
  require("db/configDB.inc.php");

  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $firstname = $_SESSION['firstnamee'];
  $lastname = $_SESSION['lastnamee'];
  $email = $_SESSION['email'];

  $con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
  // Check connection
  if (mysqli_connect_error()) 
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 

  echo "<br>Username: ".$username;
  echo "<br>First Name: ".$firstname;
  echo "<br>Last Name: ".$lastname;
  echo "<br>Password: ".$password;
  echo "<br>Email: ".$email;

  $info = mysql_get_client_info();
echo $info;



  $sql = "SELECT * FROM user";
  $result = mysqli_query($con,$sql);


  while($row = mysqli_fetch_array($result)) 
  {
    echo "<br>";
    print_r($row);
  }






/*

  $sql = "INSERT INTO user VALUES ('".$username."','".$firstname."','".$lastname."','".$password."','".$email."','NE')";

  if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

*/

  mysqli_close($con);
  echo "<html><head><script type='text/javascript'> alert('submitted!'); </script></head></html>";
  //echo "<html><head><script type='text/javascript'> window.parent.location.href = 'profile.php'; </script></head></html>"; 
?>
