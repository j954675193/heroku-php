<?php

// MySQL connection information

// $servername = "localhost";
// $username = "root";
// $password = "admin";
// $dbname = "employees";

// $servername = "us-cdbr-east-02.cleardb.com";
// $username="b4c7ffe5a5a37c";
// $password="218c61d0";
// $dbname="heroku_07c44eac08d0ae1";

$url = parse_url(getenv("DATABASE_URL"));
$servername = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$dbname = substr($url["path"], 1);

echo "Extracted Info $servername $username $password $dbnane<br>";
?>