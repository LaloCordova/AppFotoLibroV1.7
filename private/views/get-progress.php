<?php

// Connect to the database
$host = "localhost";
$username = "root";
$pw = "";
$db_name = "foto_libro";

$link = new mysqli($host, $username, $pw, $db_name);
if (!$link) {
    die('Database connection failed');
}

// Query the database
$result = mysqli_query($link, "SELECT current_pages, limit_pages FROM users where id_users =40");

// Fetch the result as an associative array
$row = mysqli_fetch_assoc($result);

// Get the current and final values
$current = $row["current_pages"];
$final = $row["limit_pages"];

print $row["current_pages"];
// Close the connection
mysqli_close($link);

// Return the result as JSON
header("Content-Type: application/json");
echo json_encode(array("current" => $current, "final" => $final));

?>