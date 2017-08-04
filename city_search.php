<?php
header("restaurant.php");
exit;
session_start();
$mysqli = new mysqli('localhost', 'admin', 'admin', 'project');
// Oh no! A connect_errno exists so the connection attempt failed!
$result = array('success' => true, 'error_message' => '', 'results'=>array());
if ($mysqli->connect_errno) {


    $msg = "Error: Failed to make a MySQL connection, here is why: \n";
    $msg .= "Errno: " . $mysqli->connect_errno . "\n";
    $msg .= "Error: " . $mysqli->connect_error . "\n";
    
    $result['success'] = false;
    $result['error_message'] = $message;
    header('Content-Type: application/json');
    echo json_encode($result);
    exit;
}
$city = $mysqli->real_escape_string(strtolower($_GET['city']));
$sql = "SELECT * FROM restaurant WHERE city = '$city' LIMIT 10";

if (!$mysql_result = $mysqli->query($sql)) {


    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    $msg = "Error: Our query failed to execute and here is why: \n";
    $msg .= "Query: " . $sql . "\n";
    $msg .= "Errno: " . $mysqli->errno . "\n";
    $msg .= "Error: " . $mysqli->error . "\n";
    header('Content-Type: application/json');
    echo json_encode($result);
    exit;
}
while ($row = $mysql_result->fetch_assoc()) {
    $result['results'][] = $row;
    echo json_encode($result);
    exit;
}
?>