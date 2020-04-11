<?php
$host	= "localhost";
$username	= "root";
$password	= "";
$database	= "org";
$connection = new mysqli($host, $username, $password, $database);
	if (!$connection) {
        echo 'Cannot connect to database server';
        exit;
    }   
?>