<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sat Jun 21 2014 07:25:06 GMT+0000 (UTC) -->
<html data-wf-site="53a510758b680c4d190ddb90">
<head>
  <meta charset="utf-8">
  <title>Code Muse - Profile</title>
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
    <div class="w-tabs" data-duration-in="300" data-duration-out="100">
      <div class="w-tab-menu">
        <a class="w-tab-link w--current w-inline-block" data-w-tab="Basic Information">
          <div>Basic Information</div>
        </a>
        <a class="w-tab-link w-inline-block" data-w-tab="Skills">
          <div>Skills</div>
        </a>
        <a class="w-tab-link w-inline-block" data-w-tab="Account Settings">
          <div>Account Settings</div>
        </a>
      </div>
      <div class="w-tab-content">
        <div class="w-tab-pane w--tab-active" data-w-tab="Basic Information">
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form">
              <label class="profile-label" for="first-name">First Name</label>
              <input class="w-input profile-field" id="first-name" type="text" placeholder="First Name" name="first-name" data-name="First Name" autofocus="autofocus">
              <label class="profile-label" for="last-name">Last Name</label>
              <input class="w-input profile-field" id="last-name" type="text" placeholder="Last Name" name="last-name" data-name="Last Name">
              <label class="profile-label" for="email">Email Address:</label>
              <input class="w-input profile-field" id="email" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required">
              <input class="w-button profile-save-button" type="submit" value="Save" data-wait="Please wait...">
            </form>
            <div class="w-form-done">
              <p>Thank you! Your submission has been received!</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form :(</p>
            </div>
          </div>
        </div>
        <div class="w-tab-pane" data-w-tab="Skills"></div>
        <div class="w-tab-pane" data-w-tab="Account Settings">
          <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2">
              <label class="profile-label" for="old-password">Old Password</label>
              <input class="w-input profile-field" id="old-password" type="password" placeholder="Old Password" name="old-password" data-name="Old Password" required="required">
              <label class="profile-label" for="old-password-2">New Password</label>
              <input class="w-input profile-field" id="old-password-2" type="password" placeholder="Old Password" name="old-password-2" data-name="Old Password 2" required="required">
              <label class="profile-label" for="old-password-confirmation">Confirm New Password</label>
              <input class="w-input profile-field" id="old-password-confirmation" type="password" placeholder="Confirm New Password" name="old-password-confirmation" data-name="Old Password Confirmation" required="required">
              <input class="w-button profile-save-button" type="submit" value="Save" data-wait="Please wait...">
            </form>
            <div class="w-form-done">
              <p>Thank you! Your submission has been received!</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form :(</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-container">
      <div class="w-tabs" data-duration-in="300" data-duration-out="100"></div>
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