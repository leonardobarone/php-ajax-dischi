<?php 

require __DIR__ . '/../materiale/database.php';

header("Content-type: application/json");

echo json_encode($database);