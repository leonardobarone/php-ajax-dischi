<?php 

require __DIR__ . '/../materiale/database.php';

header("Content-type: application/json");
// header('Access-Control-Allow-Origin: *');

if ( !empty(($_GET["genre"])) ) {

    $genre = strtolower($_GET["genre"]);
    $databaseFiltered = [];

    foreach($database as $disco) {
        if($genre == strtolower($disco["genre"])) {
            $databaseFiltered[] = $disco;
        } 
    }
    echo json_encode($databaseFiltered);

} else {

    echo json_encode($database);

}







