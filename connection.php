<?php
$db = mysqli_connect("localhost:3307", "root", "lakshmi24", "library");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection Successful";
?>