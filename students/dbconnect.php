<?php
$servername = "localhost";
$username = "projectcms";
$password = "123456";
$dbname = "abcdproject";
$count2_sound='1';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 