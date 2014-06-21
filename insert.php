    <?php
          require("dblogin.php");
          require("dbconstants.php");
          $db = mysql_connect(DB_DEV_INSTANCE_NAME,
                              DB_USERNAME,
                              DB_PASSWORD);
          mysql_select_db(DB_DATABASE_NAME);

          if (!$db || $db->connect_error)
            die("failed to connect to database");

      $projectname = $_POST['projectname'];
      $tagline = $_POST['tagline'];
      $description = $_POST['description'];
      $details = $_POST['details'];
      $difficulty = $_POST['difficulty'];

      $query = "INSERT INTO project(pName, pTagline, pDescr, pDetails, pDifficulty)VALUES('$projectname','$tagline','$description','$details','$difficulty');"; 
      if(mysql_query($query))
      { 
        echo "inserted";
      } 
      else
      { 
        echo "fail";
      }
/*
      $project_id = mysql_return_id();
      $tags = $_POST['tags'];
      $query = "INSERT INTO project_tag(pID, tagName)VALUES('$project_id','$tags')"; 
*/
    ?>