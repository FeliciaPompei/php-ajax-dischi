<?php 
include_once __DIR__ . '/data.php';

header ('Content-Type: application/json');
echo json_encode (
    [
        'results' => $filteredList,
    ]
);

?>