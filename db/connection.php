<?php

$hostname = "localhost";
$servername = "root";
$password = "";
$dbname = "e-commerce";

$connection = mysqli_connect($hostname,$servername,$password,$dbname);

if (!$connection){
    die("connection Failed".mysqli_connect_error());
}