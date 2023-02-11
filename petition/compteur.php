<?php

$conn = new mysqli($host_name, $db_username, $pwd, $database);
$query = "SELECT COUNT(*) FROM $dbTable WHERE verified = 1"; 
$result = mysqli_query($conn, $query);
$row= mysqli_fetch_array($result);

?>