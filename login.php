<?php
session_start();
require("db/configDB.inc.php");
//$db = new Database("localhost:8889", "root", "root", "codemuse");
//$db->connect(); // connect to the server


/*
$link = mysql_connect(
  ':/Applications/MAMP/tmp/mysql/mysql.sock',
  'root',
  'root'
);

$db = mysql_select_db("codemuse", $link);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


mysql_query(query)



*/

$con=mysqli_connect(null, DB_USER, '', "CodeMuse", null, "/cloudsql/animated-guard-617:mydb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


/*
$result = mysqli_query($con,"SELECT * FROM user");

while($row = mysqli_fetch_array($result)) 
{
  echo "fetching...";
  echo $row['username']."and".$row['userID'];
}
*/


  if (isset($_POST['username']))
  {
    $loginFailed = true;
    // get user's nickname using their unique ID using defined TABLE_USERS table name from config
    $sql = "SELECT * FROM user
            WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
            
    // since user_id is unique, only one record needs returned
    //     I use $db->query_first() instead of $db->query() and fetch_array()
    //     $db->query_first() will return array with first record found


    $result = mysqli_query($con,$sql);
    if ($row = mysqli_fetch_array($result)) 
    {
      $loginFailed = false;
      $_SESSION['username'] = $row['username'];
      echo "SUCCESS!";
    } else 
    {
      echo "LOGIN FAILED!";
    }

            /*
    $record = $db->query_first($sql);
    if (isset($record['username']))
    {
      $_SESSION['username'] = $_POST['username'];
      $loginFailed = false;
    }
    */
  }



  // If logged in, redirect to profile
  if (isset($_SESSION['username']))
  {
    echo "<html><head><script type='text/javascript'> window.parent.location.href = 'profile.php'; </script></head></html>"; 
  }

?>

<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sat Jun 21 2014 07:25:06 GMT+0000 (UTC) -->
<html data-wf-site="53a510758b680c4d190ddb90">
<head>
  <meta charset="utf-8">
  <title>Code Muse - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/code-muse.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Montserrat:400,700","Bitter:400,700,400italic"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico">
  <link rel="apple-touch-icon" href="images/webclip-slate.png">
</head>
<body>
  <header class="navbar">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4">
          <img class="logo" src="images/Keyboard.png" width="23" alt="53a510ea4e0d51ec23981546_Keyboard.png">
          <div class="app-name"><a style="text-decoration: none; color: #5c5c5c;" href="http://www.codemuse.me">Codemuse</a></div>
        </div>
        <div class="w-col w-col-8 nav-column"><a class="nav-link" href="login.php">Login</a><a class="nav-link" href="sign-up.php">Sign Up</a>
        </div>
      </div>
    </div>
  </header>
  <div class="section hero"></div>
  <div class="w-clearfix login-div" id="features">
    <div class="w-container">
      <div class="login-box">
        <div class="w-form login-wrapper">
          <form class="inner-login-div" id="wf-form-login-form" name="wf-form-login-form" data-name="Login Form" method="POST" action='login.php'>
            <label class="login-label" for="username">Username</label>
            <input class="w-input login-field" id="username" type="text" placeholder="Enter your username" name="username" data-name="Username" required="required" autofocus="autofocus">
            <label class="login-label" for="password">Password</label>
            <input class="w-input login-field" id="password" type="password" placeholder="Enter your password" name="password" data-name="Password" required="required">
            <input class="w-button login-button" type="submit" value="Login" data-wait="Please wait...">
          </form>
          <div class="w-form-done">
            <p>Processing...</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form :(</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section grey">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6 center"></div>
        <div class="w-col w-col-6">
          <div class="w-row">
            <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"></div>
            <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"></div>
            <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section grey footer">
    <div class="w-container">
      <p class="footer-text">Slate Template by Webflow. Images by <a href="http://www.flickr.com/photos/kara_allyson/" class="text-link">Kara Allyson</a>.</p>
      <div class="button-block">
        <a class="w-inline-block social-button" href="mailto:support@webflow.com?subject=Hello!" target="_blank">
          <img src="images/email-icon.png" width="21px" alt="52af8da2aed63fb91400000f_email-icon.png">
        </a>
        <a class="w-inline-block social-button" href="http://facebook.com/webflowapp" target="_blank">
          <img src="images/facebook-icon.png" width="21px" alt="52af8da8aed63fb914000010_facebook-icon.png">
        </a>
        <a class="w-inline-block social-button" href="http://twitter.com/webflowapp" target="_blank">
          <img src="images/twitter-icon.png" width="21px" alt="52af8db1aed63fb914000011_twitter-icon.png">
        </a>
      </div>
      <img class="logo-in-footer" src="images/footer-logo.png" width="25px" alt="52af8db8aed63fb914000012_footer-logo.png">
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>

