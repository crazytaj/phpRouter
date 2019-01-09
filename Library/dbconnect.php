<?php
$db_host = __databaseHost;  
$db_name = __databaseName;
$db_user = __databaseUser;
$db_pass = __databasePassword;
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name) or die("Connection failed: " . $conn->connect_error);
