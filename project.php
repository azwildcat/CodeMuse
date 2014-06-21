<?php
session_start();
?>

<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sat Jun 21 2014 07:25:06 GMT+0000 (UTC) -->
<html data-wf-site="53a510758b680c4d190ddb90">
<head>
  <meta charset="utf-8">
  <title>CodeMuse - Project</title>
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
  <header class="w-clearfix navbar">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4">
          <img class="logo" src="images/Keyboard.png" width="23" alt="53a510ea4e0d51ec23981546_Keyboard.png" href="index.php">
          <div class="app-name"><a style="text-decoration: none; color: #5c5c5c;" href="http://www.codemuse.me">Codemuse</a></div>
        </div>
        <div class="w-col w-col-8 nav-column"><a class="nav-link" href="login.php">Login</a><a class="nav-link" href="sign-up.php">Sign Up</a><a class="nav-link" href="create-project.php">Create Project</a>
        </div>
      </div>
    </div>
  </header>
  <div class="w-clearfix section" id="features">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <?php
            require("dblogin.php");
            if (!$_GET['pid']) die("need a pid!");
            $proj = mysql_query("SELECT * FROM project where pID="
                                 .$_GET['pid']);
            $project = mysql_fetch_row($proj);
            if (!$project) die("project not found");
          ?>
          <h2><?= $project[PROJECT_PNAME] ?></h2>
          <p><?= $project[PROJECT_PDESCR] ?></p>
          <div class="w-row">
            <?php display_tags($_GET['pid']) ?>
          </div>
        </div>
        <div class="w-col w-col-6 center">
          <h3>Like this idea? <a href="mailto:amynguyen93@gmail.com">Email</a> the owner to get more details.</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="section grey">
    <div class="w-container">
      <div class="w-row new-class">
        <div class="w-col w-col-6">
          <h4>See more of our featured projects...</h4>
        </div>
      </div>
      <div class="w-row snippet-row">
         
        <?php
          if (!$db || $db->connect_error)
            die("failed to connect to database");

          $featured_ids = mysql_query('SELECT pID FROM featured;');
          for ($i = 0; $i < 4; $i++) {
            $featured_id = mysql_fetch_row($featured_ids)[0];
            $featured_result = mysql_query(
                          "SELECT * FROM project WHERE pID=$featured_id");
            $featured = mysql_fetch_row($featured_result);
        ?>
        <div class="w-col w-col-3 w-col-small-6">
            <div class="snippet-text-section">
              <div class="snippet-title">
                <a class="w-clearfix w-inline-block snippet" href="project.php?pid=<?= $featured[PROJECT_PID] ?>">
                  <?= $featured[PROJECT_PNAME] ?>
                </a>
              </div>
              <div class="snippet-text">
                <?= $featured[PROJECT_PTAGLINE] ?><br>
                <br>
                <strong>Difficulty</strong>:
                  <?= $difficulties[$featured[PROJECT_PDIFFICULTY]] ?>
                <br>
                <strong>Tags</strong>:
                  <?php display_tags($featured[PROJECT_PID]) ?>
              </div>
            </div>
        </div>
        <?php 
              mysql_free_result($featured_result);
            }
            mysql_free_result($featured_ids);
        ?>
      </div>
    </div>
  </div>
  <div class="section purple">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-8">
          <h2 class="price-text">Suggestions? We would love to hear from you!</h2>
        </div>
        <div class="w-col w-col-4">
          <a class="w-inline-block button app-button" href="mailto:team@codemuse.me">
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