<?php 
include_once __DIR__ . '/data.php';
$filteredList = [];
$search = $_GET['genre'];

    if (!empty($_GET) && !empty($search)){
        $queryGenre = strtolower($search);
        foreach ($recordDisks as $disc){
            $currentGenre = strtolower($disc['genre']);
            if ( $currentGenre == $queryGenre ){
                $filteredList[] = $disc;
            }
        }
    } else {
        $filteredList = $recordDisks;
    };

header ('Content-Type: application/json');
echo json_encode (
    [
        'results' => $filteredList,
    ]
);

?>