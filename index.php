<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Fri Jun 20 2014 18:39:28 GMT+0000 (UTC) -->
<html data-wf-site="53a47cceafbab64117fee694">
<head>
  <meta charset="utf-8">
  <title>Code Muse Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/code-muse-project.webflow.css">
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
        <div class="w-col w-col-8 nav-bar">
          <a class="nav-link" href="#">Log In</a>
          <a class="nav-link sign-up" href="#">Sign Up</a>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="hero-bg">
      <div class="w-container">
        <h1 id="page-nav-Section-1">Learn to make an impact.</h1>
        <div class="subtitle">
          With CodeMuse, you can work on what matters. Hone your skills while
          making a difference in someone's life. Help the causes you care about
          and see just how far you can go with a little bit of technical
          knowledge.
        </div>
      </div>
    </div>
  </div>
  <div class="content-bg">
    <div class="w-container">
      <h2 id="page-nav-Section-2">Everything is cool when you're part of a team.</h2>
    </div>
  </div>
  <div class="section">
    <div class="w-container">
      <div class="w-row new-class">
        <div class="w-col w-col-6">
          <h4>Featured Projects</h4>
        </div>
      </div>
      <div class="w-row snippet-row">
          <?php
            require("dblogin.php");
            require("dbconstants.php");
            $db = mysql_connect(DB_IP_ADDRESS,
                                DB_USERNAME,
                                DB_PASSWORD
                                );
            mysql_select_db(DB_DATABASE_NAME);

            $featured_ids = mysql_query('SELECT pID FROM featured;');
            for ($i = 0; $i < 4; $i++) {
              $featured_id = mysql_fetch_row($featured_ids)[0];
              $featured_result = mysql_query(
                            "SELECT * FROM project WHERE pID=$featured_id");
              $featured = mysql_fetch_row($featured_result);
          ?>
        <div class="w-col w-col-3 w-col-small-6">
          <a class="w-clearfix w-inline-block snippet" href="#">
            <!--<img class="example-image" src="http://uploads.webflow.com/placeholder/image-placeholder.svg" alt="image-placeholder.svg">-->
            <div class="snippet-text-section">
              <div class="snippet-title">
                <?= $featured[PROJECT_PNAME] ?>
              </div>
              <div class="snippet-text">
                <?= $featured[PROJECT_PTAGLINE] ?>
                <br>
                <br><strong>Difficulty</strong>: Mild
                <br><strong>Tags</strong>:&nbsp;HTML, CSS
                <br><strong>Location</strong>:&nbsp;Anywhere</div>
            </div>
          </a>
        </div>
        <?php 
              mysql_free_result($featured_result);
            }
            mysql_free_result($featured_ids);
        ?>
      </div>
    </div>
  </div>
  <!--
  <div class="content-bg">
    <div class="w-container">
      <h2 id="page-nav-Section-2">Highlights:&nbsp;Successful projects</h2>
    </div>
  </div>
  -->
  <div class="section grey">
    <div class="w-container">
      <div class="w-row secondary-row">
        <div class="w-col w-col-8 w-col-small-6">
          <h4>Interested? Get started!</h4>
          <p>Sign-up for an account and start changing the world, one project at a time.</p>
        </div>
        <div class="w-col w-col-4 w-col-small-6 button-column"><a class="button" href="#">Sign Up</a>
        </div>
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