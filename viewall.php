<?php
session_start();
require("db/configDB.inc.php");
$con=mysqli_connect("173.194.109.158","root","yaycodemuse","CodeMuse");
//$con=mysqli_connect("localhost","root","root","codemuse");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    // get user's nickname using their unique ID using defined TABLE_USERS table name from config
    $sql = "SELECT * FROM project";
    $result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sat Jun 21 2014 07:25:06 GMT+0000 (UTC) -->
<html data-wf-site="53a510758b680c4d190ddb90">
<head>
  <meta charset="utf-8">
  <title>Slate Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/find-project.webflow.css">
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
  <header class="w-clearfix navbar"><a class="button project-button" href="projects-landing-page.php">Projects</a>
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4">
          <img class="logo" src="images/Keyboard.png" width="23" alt="53a510ea4e0d51ec23981546_Keyboard.png" href="index.php">
          <div class="app-name">Codemuse</div>
        </div>
        <div class="w-col w-col-8 nav-column"><a class="nav-link" href="login.php">Login</a><a class="nav-link" href="sign-up.php">Sign Up</a>
        </div>
      </div>
    </div>
  </header>

  <div class="section hero">
    <div class="w-row">
      <div class="w-col w-col-6">
        <!img src="images/android.png" width="300" alt="53a5122b8b680c4d190ddbae_android.png">
      <div class="w-container">
        <h1 id="page-nav-Section-1">PROJECTS</h1>
        <div class="subtitle"><font color="white">Find exciting projects!</font></div>
      </div>
      </div>
    </div>
  </div>


  <div class="section">
    <div class="w-container">
      <div class="w-form w-clearfix projsearchclass">
        <form class="w-clearfix searchprojbutton" id="email-form" name="email-form" data-name="Email Form">
          <input class="w-input seachprojtext" id="search-3" type="email" name="search-3" data-name="Search 3">
          <input class="w-button searchprojbutton" type="submit" value="Search" data-wait="Please wait...">
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form :(</p>
        </div>
      </div>
    </div>

    <div class="w-container">
      

      <?php
          $result = mysqli_query($con,$sql);
          $row_cnt = $result->num_rows;
          $i = 0;
          //while($row = mysqli_fetch_array($result) and $i < 4) { 
          while($row_cnt > 0) {
            ?>

      <div class="w-row snippet-row">
      <?php
          for ($i = 0; $i < 4 and $row_cnt > 0; $i++) {
            $row = mysqli_fetch_array($result);
            $row_cnt--;
        ?>
        <div class="w-col w-col-3 w-col-small-6">
          <a class="w-clearfix w-inline-block snippet" href="#">
            <!img class="example-image" src="http://uploads.webflow.com/placeholder/image-placeholder.svg" alt="image-placeholder.svg">
            <img class="example-image"
            src="http://ii.library.jhu.edu/files/2013/05/MakingGroupProjectsWork-300x148.png" alt="53a51c3b6ef253ee23c20028_C%2B%2B-logo.jpg">
            <div class="snippet-text-section">
              <div class="snippet-title"><?php echo $row["pName"]?></div>
              <div class="snippet-text"><?php echo $row["pTagline"]?></div>
            </div>
          </a>
        </div>
        <?php
          }
          ?>

      </div>
          <?php
          }
        ?>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6 left-footer-col">
          <div class="footer-text">©&nbsp;CodeMuse. All Rights Reserved.</div>
        </div>
        <div class="w-col w-col-6 footer-nav-bar"><a class="footer-link" href="#">About</a><a class="footer-link" href="#">Help</a><a class="footer-link" href="#">Contact</a>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>