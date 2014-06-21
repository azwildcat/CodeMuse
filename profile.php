<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<<<<<<< HEAD
<!-- Last Published: Sat Jun 21 2014 07:25:06 GMT+0000 (UTC) -->
<html data-wf-site="53a510758b680c4d190ddb90">
=======
<!-- Last Published: Fri Jun 20 2014 21:13:04 GMT+0000 (UTC) -->
<html data-wf-site="53a46fb624f5e79921e2d8eb">
>>>>>>> FETCH_HEAD
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
<<<<<<< HEAD
          <img class="logo" src="images/Keyboard.png" width="23" alt="53a510ea4e0d51ec23981546_Keyboard.png">
          <div class="app-name">Codemuse</div>
        </div>
        <div class="w-col w-col-8 nav-column"><a class="nav-link" href="#">Login</a><a class="nav-link" href="#page-nav-share">Sign Up</a>
=======
          <img class="logo" src="images/logo-header.png" width="25" alt="530e4fc7f4a216ca3c0000e1_logo-header.png">
          <div class="app-name">slate</div>
        </div>
        <div class="w-col w-col-8 nav-column"><a class="nav-link" href="#">Features</a><a class="nav-link" href="#page-nav-share">Download</a>
>>>>>>> FETCH_HEAD
        </div>
      </div>
    </div>
  </header>
<<<<<<< HEAD
  <div class="section hero"></div>
  <div class="w-clearfix login-div" id="features">
    <div class="w-tabs" data-duration-in="300" data-duration-out="100">
      <div class="w-tab-menu">
        <a class="w-tab-link w--current w-inline-block" data-w-tab="Basic Information">
          <div>Basic Information</div>
=======
  <div class="section hero">
    <div class="w-tabs" data-duration-out="100" data-easing="ease-in" data-duration-in="100">
      <div class="w-tab-menu">
        <a class="w-tab-link w-inline-block" data-w-tab="Basic Information">
          <div>Basic information</div>
>>>>>>> FETCH_HEAD
        </a>
        <a class="w-tab-link w-inline-block" data-w-tab="Skills">
          <div>Skills</div>
        </a>
<<<<<<< HEAD
        <a class="w-tab-link w-inline-block" data-w-tab="Account Settings">
=======
        <a class="w-tab-link w--current w-inline-block" data-w-tab="Account Settings">
>>>>>>> FETCH_HEAD
          <div>Account Settings</div>
        </a>
      </div>
      <div class="w-tab-content">
<<<<<<< HEAD
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
=======
        <div class="w-tab-pane" data-w-tab="Basic Information">
          <div>
            <div class="w-form">
              <form class="profileform" id="email-form" name="email-form" data-name="Email Form" method="post">
                <label class="profileformlabel" for="first-name"><span>First Name:</span>
                </label>
                <input class="w-input" id="first-name" type="text" placeholder="First Name" name="first-name" data-name="First Name" required="required">
                <label class="profileformlabel" for="last-name">Last Name:</label>
                <input class="w-input" id="last-name" type="text" placeholder="Last Name" name="last-name" required="required" data-name="Last Name">
                <label class="profileformlabel" for="email">Email Address:</label>
                <input class="w-input" id="email" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required">
                <label class="profileformlabel" for="state-abbreviation">State:</label>
                <select class="w-select" id="state-abbreviation" name="state-abbreviation" data-name="State Abbreviation" required="required">
                  <option value="">Select one...</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
                <input class="w-button savebutton" type="submit" value="Save" data-wait="Please wait...">
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
        <div class="w-tab-pane" data-w-tab="Skills">
          <div class="w-form">
            <form class="profileform" id="email-form-2" name="email-form-2" data-name="Email Form 2">
              <select class="w-select skilllist" id="field" name="field">
                <option value="">Select one...</option>
                <option value="First">First Choice</option>
                <option value="Second">Second Choice</option>
                <option value="Third">Third Choice</option>
              </select><a class="button" href="#">Add</a>
              <input class="w-button savebutton" type="submit" value="Save" data-wait="Please wait...">
>>>>>>> FETCH_HEAD
            </form>
            <div class="w-form-done">
              <p>Thank you! Your submission has been received!</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form :(</p>
            </div>
          </div>
        </div>
<<<<<<< HEAD
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
=======
        <div class="w-tab-pane w--tab-active" data-w-tab="Account Settings">
          <div class="w-form">
            <form id="email-form-3" name="email-form-3" data-name="Email Form 3">
              <label class="profileformlabel" for="old-password">Old Password:</label>
              <input class="w-input" id="old-password" type="password" placeholder="Old Password" name="old-password" required="required" data-name="Old Password">
              <label class="profileformlabel" for="new-password">New Password:</label>
              <input class="w-input" id="new-password" type="text" placeholder="New Password" name="new-password" required="required" data-name="New Password">
              <label class="profileformlabel" for="new-password-2">Confirm New Password:</label>
              <input class="w-input" id="new-password-2" type="text" placeholder="Confirm New Password" name="new-password-2" required="required" data-name="New Password 2">
              <input class="w-button savebutton" type="submit" value="Submit" data-wait="Please wait...">
>>>>>>> FETCH_HEAD
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
<<<<<<< HEAD
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
=======
>>>>>>> FETCH_HEAD
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>