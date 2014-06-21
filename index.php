<?php
session_start();
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
        <img src="images/android.png" width="700" alt="53a5122b8b680c4d190ddbae_android.png">
      </div>
      <div class="w-col w-col-6 call-to-action">
        <h1 class="hero-header">A friend in need is a coder indeed.</h1>
        <p>
          With CodeMuse, you can work on what matters. Hone your skills while
          making a difference in someone's life. Help the causes you care about
          and see just how far you can go with a little bit of technical
          knowledge.
        </p><a class="button" href="sign-up.php">Sign Up!</a>
      </div>
    </div>
  </div>
  <div class="w-clearfix section" id="features">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <h2>Lead your learning path at your own pace.</h2>
          <p>With CodeMuse, you are able to choose what you want to learn and how you want to learn. Get all the help you need with the several tutorials available</p>
          <div class="w-row">
            <div class="w-col w-col-4">
              <img src="images/C%2B%2B-logo.jpg" width="100" alt="53a51c3b6ef253ee23c20028_C%2B%2B-logo.jpg">
            </div>
            <div class="w-col w-col-4">
              <img src="images/Java_Logo.png" width="60" alt="53a51c8a8b680c4d190ddc3e_Java_Logo.png">
            </div>
            <div class="w-col w-col-4">
              <img src="images/php.png" width="140" alt="53a51cdb8b680c4d190ddc42_php.png">
            </div>
          </div>
        </div>
        <div class="w-col w-col-6 center">
          <img src="images/html-code.gif" width="274" alt="53a51d836ef253ee23c20056_html-code.gif">
        </div>
      </div>
    </div>
  </div>
  <div class="section grey">
    <div class="w-container">
      <div class="w-row new-class">
        <div class="w-col w-col-6">
          <h2>Featured Projects</h2>
        </div>
      </div>
      <div class="w-row snippet-row">
         
        <?php
          function display_tags($pid) {
            $tags = 
              mysql_query("SELECT tagName FROM project_tag WHERE pID=$pid");
            $tag = mysql_fetch_row($tags)[0];
            echo $tag;
            while ($tag = mysql_fetch_row($tags)[0]) {
              echo ", $tag";
            }
          }

          require("dblogin.php");
          require("dbconstants.php");
          $db = mysql_connect(DB_DEV_INSTANCE_NAME,
                              DB_USERNAME,
                              DB_PASSWORD);
          mysql_select_db(DB_DATABASE_NAME);

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
                <a class="w-clearfix w-inline-block snippet" href="#">
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
  <div class="section">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6 w-clearfix">
          <h2>Share with friends</h2>
          <p>Help to build the Code sharing community and earn extra points in our award center.</p>
          <div class="w-widget w-widget-twitter social-widget">
            <iframe src="https://platform.twitter.com/widgets/tweet_button.html#url=http%3A%2F%2Fcodemuse.me&amp;counturl=codemuse.me&amp;text=Check%20out%20this%20site&amp;count=vertical&amp;size=m&amp;dnt=true" scrolling="no" frameborder="0" allowtransparency="true"
            style="border: none; overflow: hidden; width: 55px; height: 62px;"></iframe>
          </div>
          <div class="w-widget w-widget-gplus social-widget">
            <div class="g-plusone" data-href="http://webflow.com" data-size="tall" data-annotation="bubble" data-width="120" data-recommendations="false" id="___plusone_0" style="width: 50px; height: 60px; text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; background: transparent;"></div>
          </div>
          <div class="w-widget w-widget-facebook social-widget">
            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fwebflow&amp;layout=box_count&amp;locale=en_US&amp;action=like&amp;show_faces=false&amp;share=false" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 55px; height: 65px;"></iframe>
          </div>
        </div>
        <div class="w-col w-col-6 center">
          <img src="images/third-section.jpg" width="250" alt="52ddf261b6d2171f780000ad_third-section.jpg">
        </div>
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