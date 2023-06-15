<?php

global $connection;
include 'db/connection.php';
session_start();
session_destroy();
header('Location:login.php');
