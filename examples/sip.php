<?php

require ("./client.php");

function createAccount(){
    global $teli;

    $response= $teli->sip->createAccount([
        'account_type'=> 'device',
        'username'=> 'testphp1',
        'password'=> 'testphp'
    ]);
    var_dump($response);
}
//createAccount();

function listAccount(){
    global $teli;

    $response= $teli->sip->listAccount();
    var_dump($response);
}
//listAccount();

function updateAccount(){
    global $teli;

    $response= $teli->sip->updateAccount([
        'sipaccount_id'=> 41697,
        'account_type'=> 'server',
        'username'=> 'testingphpsip',
        'password'=> 'testingphpsip'
    ]);
    var_dump($response);
}
//updateAccount();

function removeAccount(){
    global $teli;

    $response= $teli->sip->removeAccount(41697);
    var_dump($response);
}

//removeAccount();