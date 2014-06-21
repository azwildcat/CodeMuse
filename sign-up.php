<?php
session_start();
require("db/configDB.inc.php");

?>


<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sat Jun 21 2014 07:25:06 GMT+0000 (UTC) -->
<html data-wf-site="53a510758b680c4d190ddb90">
<head>
  <meta charset="utf-8">
  <title>Code Muse - Sign Up</title>
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
          <div class="app-name">Codemuse</div>
        </div>
        <div class="w-col w-col-8 nav-column"><a class="nav-link" href="login.php">Login</a><a class="nav-link" href="sign-up.php">Sign Up</a>
        </div>
      </div>
    </div>
  </header>
  <div class="signup-form-div">
    <div class="w-form">
      <form class="sign-up-form-div" id="wf-form-signup-form" name="wf-form-signup-form" data-name="Signup Form" method="POST" action="sign-up.php">
        <label class="form-label" for="username">Username</label>
        <input class="w-input form-field" id="username" type="text" placeholder="Username" name="username" data-name="Username" required="required">
        <label class="form-label" for="password">Password</label>
        <input class="w-input form-field" id="password" type="password" placeholder="Password" name="password" data-name="Password" required="required">
        <label class="form-label" for="firstname">First Name</label>
        <input class="w-input form-field" id="firstname" type="text" placeholder="Enter your first name" name="firstname" data-name="firstname" required="required">
        <label class="form-label" for="lastname">Last Name</label>
        <input class="w-input form-field" id="lastname" type="text" placeholder="Enter your last name" name="lastname" data-name="lastname" required="required">
        <label class="form-label" for="email">Email Address:</label>
        <input class="w-input form-field" id="email" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required">
        <input class="w-button form-submit-button" type="submit" value="Submit" data-wait="Please wait...">
      </form>
      <div class="w-form-done">
        <p>Thank you! Your submission has been received!</p>
      </div>
      <div class="w-form-fail">
        <p>Oops! Something went wrong while submitting the form :(</p>
      </div>
    </div>
  </div>
  <div class="w-hidden-small w-hidden-tiny section grey"></div>
  <div class="section purple">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-8">
          <h2 class="price-text">Suggestions? Send us an email and we will be glad to hear you!</h2>
        </div>
        <div class="w-col w-col-4">
          <a class="w-inline-block button app-button">
            <img src="images/c70e618c.png" width="40" alt="53a5205b8b680c4d190ddc4d_c70e618c.png">
          </a>
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

<?php
if (isset($_POST['username']))
{

  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];

  echo "<br>Username: ".$username;
  echo "<br>Password: ".$password;
  echo "<br>First Name: ".$firstname;
  echo "<br>Last Name: ".$lastname;
  echo "<br>Email: ".$email;

  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  $_SESSION['firstnamee'] = $firstname;
  $_SESSION['lastnamee'] = $lastname;
  $_SESSION['email'] = $email;

  $con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
  // Check connection
  if (mysqli_connect_errno()) 
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 

  // Check if username exists
  $sql = "SELECT * FROM user WHERE username = '".$username."'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);

  if ($row) 
  {
    echo"username is already in use";
    echo "<html><head><script type='text/javascript'> alert('Username already exists!'); </script></head></html>"; 
  } else
  {
    mysqli_close($con);
    echo "<html><head><script type='text/javascript'> window.parent.location.href = 'register.php'; </script></head></html>"; 
  }

mysqli_close($con);



}


?>