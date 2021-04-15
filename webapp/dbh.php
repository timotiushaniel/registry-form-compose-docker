<?php

$servername = "db";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "MyDatabase";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    echo "Failed to connect";
    die("Connection failed: ".mysqli_connect_error());
}
