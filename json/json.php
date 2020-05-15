<?php

$carros = [
    0 => ['marca'=>'Volkswagen', 'modelo'=>'Up'],
    1 => ['marca'=>'Chevrolet', 'modelo'=>'Onix'],
    2 => ['marca'=>'Honda', 'modelo'=>'Civic']
];

$json = json_encode($carros);

var_dump($json);

echo "<br>";

$novosCarros = json_decode($json, true);

var_dump($novosCarros);

?>