<?php

require ("./client.php");

function ownership(){
    global $teli;

    $response= $teli->lookup->ownership(3039930000);
    var_dump($response);
}

//ownership();

function CNAM(){
    global $teli;

    $response= $teli->lookup->CNAM(3039930000);
    var_dump($response);
}

//CNAM();