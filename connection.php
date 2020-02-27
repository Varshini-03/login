<?php
$dbHost = 'localhost';
$dbUser = 'id12733600_scalevr1';
$dbPass = 'scalevr1';
$dbName = 'id12733600_login';

$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass) or die ('mysqli connect failed.');
mysqli_select_db($dbConn,$dbName) or die('Cannot select database'. mysqli_error($dbConn));

?>