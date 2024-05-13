<?php 
$data_string = file_get_contents('discs.json');

$discs = json_decode($data_string, true);


header('Content-Type: application/json');

$data = [
    'results' => $discs,
    'success' => true,
];

echo json_encode($data);

?>