<?php

require ("./client.php");

function listStates(){
    global $teli;

    $response= $teli->dids->states();
    var_dump($response);
}

//listStates();

function rateCenters(){
    global $teli;

    $response= $teli->dids->rateCenters('AB');
    var_dump($response);
}

//rateCenters();

function localNumbers(){
    global $teli;

    $response= $teli->dids->localNumbers(['state' => 'AB', 'ratecenter' => 'AIRDRIE']);
    var_dump($response);
}
localNumbers();

function tollfreeNumbers(){
    global $teli;

    $response= $teli->dids->tollFreeNumbers();
    var_dump($response);
}

//tollfreeNumbers();

function orderSingleNumber(){
    global $teli;

    $response= $teli->dids->orderSingleNumber([
        'number'=> '5876001466'
    ]);
    var_dump($response);
}

//orderSingleNumber();

function searchVanityTollfreeNumbers(){
    global $teli;

    $response= $teli->dids->searchVanityTollfreeNumbers('555*voip');
    var_dump($response);
}

//searchVanityTollfreeNumbers();

function orderVanityTollfreeNumber(){
    global $teli;

    $response= $teli->dids->orderVanityTollfreeNumber(3039930000,'yes');
    var_dump($response);
}

//orderVanityTollfreeNumber();

function getNPA(){
    global $teli;

    $response= $teli->dids->getNPA();
    var_dump($response);
}

//getNPA();

function getNXX(){
    global $teli;

    $response= $teli->dids->getNXX(201);
    var_dump($response);
}

//getNXX();

function getIntlRatesCSV(){
    global $teli;

    $response= $teli->dids->getIntlRatesCSV();
    var_dump($response);
}

//getIntlRatesCSV();

function getIntlCountriesList(){
    global $teli;

    $response= $teli->dids->getIntlCountriesList();
    var_dump($response);
}

//getIntlCountriesList();

function getIntlStatesList(){
    global $teli;

    $response= $teli->dids->getIntlStatesList(1);
    var_dump($response);
}

//getIntlStatesList();