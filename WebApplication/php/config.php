<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'jannatulferdous.ca');
define('DB_USERNAME', 'janingpo_lina');
define('DB_PASSWORD', 'safery123');
define('DB_NAME', 'janingpo_lisakun');

$servername = "jannatulferdous.ca";
$username = "janingpo_lina";
$password = "safery123";
$dbname = "janingpo_lisakun";

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$conn = new mysqli($servername, $username, $password, $dbname);
