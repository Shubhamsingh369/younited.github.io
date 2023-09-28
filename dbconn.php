<?php

$dbhost = "localhost";
$dbpassword = "";
$dbuser = "root";
$dbname = "younited_db";

$dbconn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, 3306);

if (!$dbconn) {
    die("Error: failed to connect!". mysqli_connect_error());
}
//  echo "Connected successfully";
?>