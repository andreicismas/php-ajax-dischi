<?php
include "./data.php";
// API di base -
header("Content-Type: application/json");
//ritorno album 
echo json_encode($albums_disc);
?>


