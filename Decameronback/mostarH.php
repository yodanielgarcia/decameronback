<?php

require_once('index.php');



$sql = "SELECT * FROM Hoteles";

$query=pg_query($conn,$sql) or die("Error");

$arrayName = array();
    while($row = pg_fetch_array($query)) {
        array_push($arrayName, $row);
    }
    echo json_encode($arrayName);
?>
