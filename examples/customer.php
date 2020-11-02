<?php

require ("./client.php");

function create(){
    global $teli;

    $response= $teli->customer->create([
        'username'=> 'testing php1',
        'password'=> 'testing customer',
        'email'=> 'testingcustomer@gmail.com',
        'first_name'=> 'Testing',
        'last_name'=> 'PHP',
        'phone_number'=> '123',
        'address'=> 'A Street',
        'city'=> 'New York',
        'state'=> 'NY',
        'zip'=> '28292'
    ]);
    var_dump($response);
}

//create();

function get(){
    global $teli;

    $response= $teli->customer->get(21944);
    var_dump($response);
}
//get();
function listCustomer(){
    global $teli;

    $response= $teli->customer->listCustomer();
    var_dump($response);
}
//listCustomer();

function enableAccount(){
    global $teli;

    $response= $teli->customer->enableAccount(21944);
    var_dump($response);
}

function disableAccount(){
    global $teli;

    $response= $teli->customer->disableAccount(21944);
    var_dump($response);
}

//disableAccount();
//enableAccount();

function showRates(){
    global $teli;

    $response= $teli->customer->showRates(21843);
    var_dump($response);
}
//showRates();

function addFunds(){
    global $teli;

    $response= $teli->customer->addFunds(21944,10);
    var_dump($response);
}
//addFunds();
function updateAccount(){
    global $teli;

    $response= $teli->customer->updateAccount(21944,['address'=>'test']);
    var_dump($response);
}
//updateAccount();
function updateBranding(){
    global $teli;

    $response= $teli->customer->updateBranding(21944,[
        'old_domain'=> 'a.com',
        'brand'=> 'Badi',
        'domain'=> 'c.com'
    ]);
    var_dump($response);
}
//updateBranding();
function removeCSS(){
    global $teli;

    $response= $teli->customer->removeCSS(21843);
    var_dump($response);
}
//removeCSS();

function removelogo(){
    global $teli;

    $response= $teli->customer->removeLogo(21843);
    var_dump($response);
}
//removeLogo();

function updateRates(){
    global $teli;

    $response= $teli->customer->updateRates(21843,'[10000]');
    var_dump($response);
}

function setCreditLine(){
    global $teli;

    $response= $teli->customer->setCreditLine(21843,100);
    var_dump($response);
}
//setCreditLine();
function resetPassword(){
    global $teli;

    $response= $teli->customer->resetPassword(21843);
    var_dump($response);
}

//resetPassword();
function setChannelLimits(){
    global $teli;

    $response= $teli->customer->setChannelLimits(21843,[
        'inbound'=>'10000',
        'outbound'=> '5000'
    ]);
    var_dump($response);
}

