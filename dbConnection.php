
<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "project1";
$port = 3306;

$con = new mysqli($host, $username, $password, $database, $port);

if ($con->connect_error) {
    die("Koneksi database gagal: " . $con->connect_error);
}
