<?php
$servername = "localhost";
$username = "root";
$password = "rimes123";
 $dbname = "imd_agro_database_final";

// Create connection
$db = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
