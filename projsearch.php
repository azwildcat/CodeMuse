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
<!-- Last Published: Sat Jun 21 2014 00:05:43 GMT+0000 (UTC) -->
<html data-wf-site="53a47e7024f5e79921e2da9d">
<head>
  <meta charset="utf-8">
  <title>harshitha_find_project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/find-project.webflow.css">
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico">
  <link rel="apple-touch-icon" href="images/thumbnail-starter.png">
</head>
<body>
  <div class="section header">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4 company-column">
          <div class="company-title">CodeMuse</div>
        </div>
        <div class="w-col w-col-8 nav-bar"><a class="nav-link" href="#page-nav-Section-3" target="_self">Log-In</a><a class="nav-link sign-up" href="mailto:support@webflow.com?subject=Sign me up!" target="_blank">Sign Up</a>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="hero-bg">
      <div class="w-container">
        <h1 id="page-nav-Section-1">PROJECTS</h1>
        <div class="subtitle">Find exciting projects!</div>
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
      <div class="w-row snippet-row">
      <?php
          $i = 0;
          while($row = mysqli_fetch_array($result) and $i < 3) { 
            $i++;
        ?>
        <div class="w-col w-col-3 w-col-small-6">
          <a class="w-clearfix w-inline-block snippet" href="#">
            <img class="example-image" src="http://uploads.webflow.com/placeholder/image-placeholder.svg" alt="image-placeholder.svg">
            <div class="snippet-text-section">
              <div class="snippet-title"><?php echo $row["pName"]?></div>
              <div class="snippet-text"><?php echo $row["pTagline"]?></div>
            </div>
          </a>
        </div>
        <?php
          }
        ?>
        
        <div class="w-col w-col-3 w-col-small-6">
          <div class="w-row">
            <div class="w-col w-col-9">
              <ul class="w-list-unstyled projnavpan">
                <li><a href="#">Web</a>
                </li>
                <li><a href="#">Python</a>
                </li>
              </ul>
            </div>
            <div class="w-col w-col-3 projnavpan"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-container">
      <div class="w-row new-class">
        <div class="w-col w-col-6">
          <h4>Popular</h4>
        </div>
        <div class="w-col w-col-6 right-col"><a class="more-link" href="#" target="_self">View More</a>
        </div>
      </div>
      <div class="w-row snippet-row">

      <?php
          $result = mysqli_query($con,$sql);
          $i = 0;
          while($row = mysqli_fetch_array($result) and $i < 4) { 
            $i++;
        ?>
        <div class="w-col w-col-3 w-col-small-6">
          <a class="w-clearfix w-inline-block snippet" href="#">
            <img class="example-image" src="http://uploads.webflow.com/placeholder/image-placeholder.svg" alt="image-placeholder.svg">
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
