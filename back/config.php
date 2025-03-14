<?php
$host = ""; // Hostname of MySQL server
$db_name = ""; // Database name
$username = ""; // Username of MySQL database
$password = ""; // Password of MySQL database

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
        echo "Connected successfully";
}

return $connection;

?>