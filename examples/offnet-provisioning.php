<?php

require ("./client.php");

function verifyCapability(){
    global $teli;

    $response= $teli->offnetProvisioning->verifyCapability(3039930000);
    var_dump($response);
}
//verifyCapability();

function submitNumber(){
    global $teli;

    $response= $teli->offnetProvisioning->submitNumber(3039930000,'yes');
    var_dump($response);
}
//submitNumber();

function listOffsetNumbers(){
    global $teli;

    $response= $teli->offnetProvisioning->listOffsetNumbers();
    var_dump($response);
}

//listOffsetNumbers();

function statusOfSubmit(){
    global $teli;

    $response= $teli->offnetProvisioning->statusOfSubmit(742586);
    var_dump($response);
}

//statusOfSubmit();

function listJobNumbers(){
    global $teli;

    $response= $teli->offnetProvisioning->listJobNumbers(742586);
    var_dump($response);
}

//listJobNumbers();



