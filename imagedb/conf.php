
<?php

$dbhost = "localhost";
$dbuser = "root";
$password = "root";
$dbname = "loginapp";

$db = new mysqli($dbhost, $dbuser, $password, $dbname);
if ($db->connect_error) {
    die(" Connection failed");
}
