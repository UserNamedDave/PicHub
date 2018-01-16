<?php

$dbhost ="localhost";
$dbuser="root";
$dbpassword="";
$db="pichub"; //PicHub

$mysqli=mysqli_connect($dbhost, $dbuser, $dbpassword, $db);

if (!connection_ok($mysqli)) {
  echo "Datenbank nicht erreicht!";
  exit(1);
}
?>