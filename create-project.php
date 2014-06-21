<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Fri Jun 20 2014 23:32:35 GMT+0000 (UTC) -->
<html data-wf-site="53a47cceafbab64117fee694">
<head>
  <meta charset="utf-8">
  <title>Code Muse Project - New project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/code-muse-project.webflow.css">
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico">
  <link rel="apple-touch-icon" href="images/thumbnail-starter.png">
  <!-- for the image upload widget -->
  <link href="http://hayageek.github.io/jQuery-Upload-File/uploadfile.min.css" rel="stylesheet">
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
  <script src="http://hayageek.github.io/jQuery-Upload-File/jquery.uploadfile.min.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<style>
form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }
</style>

</head>
<body>

  <div class="w-container">
    <h1>Add a new project</h1>
    <div class="w-form">
      <form id="email-form" name="project-form-1" method="post" enctype="multipart/form-data" action="insert.php">
        <label for="projectname">Project Name:</label>
        <input class="w-input" id="projectname" type="text" placeholder="Enter project name" name="projectname" required="required" autofocus="autofocus">
        <label for="lastname">Tagline:</label>
        <input class="w-input" id="tagline" type="text" placeholder="Enter a one-sentence description of your project" name="tagline" required="required">
        <label for="description">Description:</label>
        <textarea class="w-input" id="description" placeholder="Describe your project" name="description"></textarea>
        <!--
        <label for="tags">Location:</label>
        <select class="w-select" id="state" name="state" data-name="State">
          <option value="">Select your state</option>
          <option value="First">First Choice</option>
          <option value="Second">Second Choice</option>
          <option value="Third">Third Choice</option>
        </select>
        <label for="image">Project image:</label>
        <input type="file" name="myfile">
        <input type="submit" value="Upload">
      -->
        <label for="tags">Tags:</label>
        <input class="w-input" id="tags" type="text" placeholder="Enter a one-sentence description of your project" name="tags">

        <label for="tags">Difficulty:</label>
        <select class="w-select" id="spiciness" name="spiciness" required="required">
          <option value="0" selected="selected">Select the spiciness level</option>
          <option value="1">Mild</option>
          <option value="2">Medium</option>
          <option value="3">Spicy</option>
        </select>
        
        <input class="w-button" type="submit" value="Submit" data-wait="Please wait...">
      </form>
      <div class="w-form-done">
        <p>Thank you! Your submission has been received!</p>
      </div>
      <div class="w-form-fail">
        <p>Oops! Something went wrong while submitting the form :(</p>
      </div>
    </div>

  </div>
<div class="section">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6 left-footer-col">
          <div class="footer-text">©&nbsp;CodeMuse. All Rights Reserved.</div>
        </div>
        <!--
        <div class="w-col w-col-6 footer-nav-bar"><a class="footer-link" href="#">About</a><a class="footer-link" href="#">Help</a><a class="footer-link" href="#">Contact</a>
        </div>
      -->
      </div>
    </div>
  </div>
</div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>
