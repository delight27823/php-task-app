<?php
$servername = "delightsql.mysql.database.azure.com";
$username   = "delightadmin";
$password   = "Azure12345!";
$dbname     = "productsdb";

// Azure requires username@servername format
$username_full = $username . "@delightsql";

// Create connection and SELECT DATABASE
$conn = new mysqli($servername, $username_full, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
