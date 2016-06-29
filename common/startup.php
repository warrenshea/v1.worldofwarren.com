<?php
if (isset($_COOKIE['ws_theme']))
  $theme = $_COOKIE["ws_theme"];
else
  $theme = "googleplus";

if ((stristr($_SERVER['HTTP_USER_AGENT'],"MSIE 6.0") != false) || (stristr($_SERVER['HTTP_USER_AGENT'],"MSIE 7.0") != false))
  $theme = "ie6";
?>