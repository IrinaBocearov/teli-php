<?php

require ("./client.php");

function createEndpoint(){
    global $teli;

    $response= $teli->ip->createEndpoint([
        'ip_address'=> '192.168.1.11',
        'ip_name'=>'test php'
    ]);
    var_dump($response);
}

//createEndpoint();

function listEndpoint(){
    global $teli;

    $response= $teli->ip->listEndpoint();
    var_dump($response);
}

//listEndpoint();

function removeEndpoint(){
    global $teli;

    $response= $teli->ip->removeEndpoint(5023);
    var_dump($response);
}
//removeEndpoint();