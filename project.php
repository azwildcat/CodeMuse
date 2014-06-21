<?php
  if ($_GET["pid"]) {
    require("dblogin.php");
    require("dbconstants.php");

    $db = mysql_connect(DB_IP_ADDRESS,
                        DB_USERNAME,
                        DB_PASSWORD
                        );
    mysql_select_db(DB_DATABASE_NAME);

    $pid = mysql_real_escape_string($_GET["pid"]);

    $result = mysql_query("SELECT * FROM project WHERE pID=$pid");
    $project = mysql_fetch_row($result);
    if (!$project) {
      die("pid not found.");
    }
?>

pId = <?= $project[PROJECT_PID] ?></br>
pName = <?= $project[PROJECT_PNAME] ?></br>
pTagline = <?= $project[PROJECT_PTAGLINE] ?></br>
pDescr = <?= $project[PROJECT_PDESCR] ?></br>
pDetails = <?= $project[PROJECT_PDETAILS] ?></br>
pDifficulty = <?= $project[PROJECT_PDIFFICULTY] ?></br>

<?php
  } else {
    echo "please give a pid.";
  }
?>