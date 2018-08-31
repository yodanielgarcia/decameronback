<?php

// class conexion {
header('Access-Control-Allow-Origin: *'); 
// Create connection
// Check connection
$conn_string = "host='ec2-23-21-195-249.compute-1.amazonaws.com' dbname=d42t8kjbv0k8dh port=5432 user=eiwiwvlyakhcat password=7e3c59b0ef0e3e0dc0d7dfdaeb2d170c683f05dca8c6f729c0acec860c9dc7e7";
$conn = pg_connect($conn_string) or die("Error conexion");
pg_last_error();

return $conn;

pg_close($conn);
?>

