<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "visitors";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

mysqli_close($conn)

?>