<?php
$host = "localhost";
$dbname = // name databasse;
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
					username: $username,
					password: $password,
					database: $dbname);

if ($mysqli->connect_errno) {
	die("connect errno: " . $mysqli->connect_errno);
}
return $mysqli;
?>
