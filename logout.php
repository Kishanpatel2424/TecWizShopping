<?php
session_start();
include_once('dbconnection.php');
session_destroy();
header('location:index.php');
?>
