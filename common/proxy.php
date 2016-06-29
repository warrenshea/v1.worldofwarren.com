<?php header("Expires:Mon, 31 Dec 2010 05:00:00 GMT"); ?>
<?php
if ($_GET["type"] = "xml") {
  header("Content-type: text/xml");
  $page_contents = file_get_contents($_GET["url"]);
}
echo $page_contents;
?>