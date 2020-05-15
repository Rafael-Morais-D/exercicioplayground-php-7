<?php

/*
    $carros = [
        [
            'marca'=>'Honda',
            'modelo'=>'Civic'
        ]
    ];

    $json = json_encode($carros);

    file_put_contents('carros.json', $json);

*/

    $carros = file_get_contents('carros.json');

    $json = json_decode($carros, true);
    $json[] = ['marca'=>'FIAT', 'modelo'=>'Uno'];

    $jsonFinal = json_encode($json);

    file_put_contents('carros.json', $jsonFinal);

?>