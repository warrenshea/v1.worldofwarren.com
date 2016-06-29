<? include '../../common/unload.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/common/reset_css.css" />
    <link rel="stylesheet" type="text/css" href="/common/gmail/stylesheet.css" />   
    <title>Feather</title>
    <style type="text/css">
	  img {
        border: 1px solid #666;
	  }
	</style>
  </head>
  <body>
    <center><br />
    <h1>Feather</h1><br />
    <a href="?issue=1">Issue 1</a> | <a href="?issue=2">Issue 2</a> | <a href="?issue=3">Issue 3</a> | <a href="?issue=4">Issue 4</a> | <a href="?issue=5">Issue 5</a><br /><br />
    <h1>Issue <?php echo $_GET["issue"]; ?></h1><br />
<?php
  if ($_GET["issue"] == "1") {
    
    for ( $counter = 0; $counter <= 9; $counter += 1) {
      echo "<img src=\"Issue_01_Page_0" . $counter . ".jpg\"><br /><br />";
	}
    for ( $counter = 10; $counter <= 23; $counter += 1) {
      echo "<img src=\"Issue_01_Page_" . $counter . ".jpg\"><br /><br />";
    }
  } elseif ($_GET["issue"] == "2") {
    for ( $counter = 0; $counter <= 9; $counter += 1) {
      echo "<img src=\"Issue_02_Page_0" . $counter . ".jpg\"><br /><br />";
	}
    for ( $counter = 10; $counter <= 23; $counter += 1) {
      echo "<img src=\"Issue_02_Page_" . $counter . ".jpg\"><br /><br />";
    }
  } elseif ($_GET["issue"] == "3") {
    for ( $counter = 0; $counter <= 9; $counter += 1) {
      echo "<img src=\"Issue_03_Page_0" . $counter . ".jpg\"><br /><br />";
	}
    for ( $counter = 10; $counter <= 19; $counter += 1) {
      echo "<img src=\"Issue_03_Page_" . $counter . ".jpg\"><br /><br />";
    }
      echo "<img src=\"Issue_03_Page_20_Page_21.jpg\"><br /><br />";
      echo "<img src=\"Issue_03_Page_22.jpg\"><br /><br />";
  } elseif ($_GET["issue"] == "4") {
    for ( $counter = 0; $counter <= 9; $counter += 1) {
      echo "<img src=\"Issue_04_Page_0" . $counter . ".jpg\"><br /><br />";
	}
    for ( $counter = 10; $counter <= 28; $counter += 1) {
      echo "<img src=\"Issue_04_Page_" . $counter . ".jpg\"><br /><br />";
    }
  } elseif ($_GET["issue"] == "5") {
    for ( $counter = 0; $counter <= 9; $counter += 1) {
      echo "<img src=\"Issue_05_Page_0" . $counter . ".jpg\"><br /><br />";
	}
    for ( $counter = 10; $counter <= 48; $counter += 1) {
      echo "<img src=\"Issue_05_Page_" . $counter . ".jpg\"><br /><br />";
    }
    echo "<img src=\"Issue_05_Page_49_back.jpg\"><br /><br />";
  }
?>

    <br /><a href="?issue=1">Issue 1</a> | <a href="?issue=2">Issue 2</a> | <a href="?issue=3">Issue 3</a> | <a href="?issue=4">Issue 4</a> | <a href="?issue=5">Issue 5</a><br /><br />
  </center>
  </body>
</html>
