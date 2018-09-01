<?php
die();
echo 'Current PHP version: ' . phpversion();
echo "<br>";
if (ini_get("allow_url_fopen") ==1) {
 echo "allow_url_fopen is ON";
 } else {
  echo "allow_url_fopen is OFF";
}
?>