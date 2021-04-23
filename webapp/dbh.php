<?php

$servername = "db";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "MyDatabase";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

$create_table_query = "CREATE TABLE IF NOT EXISTS user (
	id int(11) NOT NULL AUTO_INCREMENT,
  	fullname varchar(50) NOT NULL,
  	email varchar(100) NOT NULL,
    address varchar(100) NOT NULL,
    phone_number varchar(15) NOT NULL,
    department varchar(40) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;";

$create_table = mysqli_query($conn, $create_table_query);

if (!$conn) {
    echo "Failed to connect";
    die("Connection failed: ".mysqli_connect_error());
} elseif (!$create_table) {
    echo "Create Table Query Failed.";
    die("Query failed: ".mysqli_error());
}
