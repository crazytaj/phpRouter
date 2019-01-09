<?php
$db_host = __db_host;  
$db_name = __db_name;
$db_user = __db_user;
$db_pass = __db_pass;
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name) or die("Connection failed: " . $conn->connect_error);
