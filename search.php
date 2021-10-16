<?php
require_once 'DB.php';

$name = $_POST['name']; // The input box's value

$db = new DB();
$data = $db->searchData($name);  // Search for the name in the database

echo json_encode($data); // Send result back to the main.js