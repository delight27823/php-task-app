<?php
$host = "delightsql.mysql.database.azure.com";
$username = "delightadmin@delightsql";
$password = "Azure12345!";
$dbname = "productsdb";

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL,NULL,NULL,NULL);

mysqli_real_connect(
    $conn,
    $host,
    $username,
    $password,
    $dbname,
    3306,
    MYSQLI_CLIENT_SSL
);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
