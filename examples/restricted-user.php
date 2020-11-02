<?php

require ("./client.php");

function createUser(){
    global $teli;

    $response= $teli->restrictedUser->createUser([
        'username' => 'hello12345',
        'password' => 'testing123',
        'email' => 'hello@hello1.com',
        'first_name' => 'hello',
        'last_name'=> 'testing',
        'phone_number' => '525634731',
        'address' => 'abu dabhi street',
        'city' => 'dubai',
        'state' => 'NY',
        'zip' => '14420'
    ]);
    var_dump($response);
}

//createUser();

function getUser(){
    global $teli;

    $response= $teli->restrictedUser->getUser(21960);
    var_dump($response);
}
//getUser();

function listUser(){
    global $teli;

    $response= $teli->restrictedUser->listUser();
    var_dump($response);
}
//listUser();

function updateUser(){
    global $teli;

    $response= $teli->restrictedUser->updateUser(21960,[
        'first_name'=> 'testing php'
    ]);
    var_dump($response);
}
//updateUser();

function enableUser(){
    global $teli;

    $response= $teli->restrictedUser->enableUser(21960);
    var_dump($response);
}
//disableUser();
function disableUser(){
    global $teli;

    $response= $teli->restrictedUser->disableUser(21960);
    var_dump($response);
}
//enableUser();
function listUserRates(){
    global $teli;

    $response= $teli->restrictedUser->listUserRates(21960);
    var_dump($response);
}
//listUserRates();

function fundUser(){
    global $teli;

    $response= $teli->restrictedUser->fundUser(21960,1);
    var_dump($response);
}
//fundUser();

function listPermissionGroups(){
    global $teli;

    $response= $teli->restrictedUser->listPermissionGroups();
    var_dump($response);
}
//listPermissionGroups();

function listPermissionUser(){
    global $teli;

    $response= $teli->restrictedUser->listPermissionUser(21456);
    var_dump($response);
}
//listPermissionUser();

function setSecurityGroup(){
    global $teli;

    $response= $teli->restrictedUser->setSecurityGroup(21456,87,'yes');
    var_dump($response);
}

//setSecurityGroup();

function updateUserRates(){
    global $teli;

    $response= $teli->restrictedUser->updateUserRates(21456,'[20000]');
    var_dump($response);
}
//updateUserRates();

function setCreditLine(){
    global $teli;

    $response= $teli->restrictedUser->setCreditLine(21456,1);
    var_dump($response);
}
//setCreditLine();

function resetPassword(){
    global $teli;

    $response= $teli->restrictedUser->resetPassword(21456);
    var_dump($response);
}
//resetPassword();

function updateBranding(){
    global $teli;

    $response= $teli->restrictedUser->updateBranding(21456,[
        'old_domain'=> 'a.com',
        'brand'=> 'Budi',
        'domain'=> 'https://www.google.com'
    ]);
    var_dump($response);
}
//updateBranding();

function removeCSS(){
    global $teli;

    $response= $teli->restrictedUser->removeCSS(21456);
    var_dump($response);
}
//removeCSS();
function removeLogo(){
    global $teli;

    $response= $teli->restrictedUser->removeLogo(21456);
    var_dump($response);
}
//removeLogo();

function getToken(){
    global $teli;

    $response= $teli->restrictedUser->getToken(21456);
    var_dump($response);
}
//getToken();

function enableOffnet(){
    global $teli;

    $response= $teli->restrictedUser->enableOffnet(21456);
    var_dump($response);
}
//enableOffnet();
function setPostpay(){
    global $teli;

    $response= $teli->restrictedUser->setPostpay(21456);
    var_dump($response);
}
//setPostpay();
function setChannelLimits(){
    global $teli;

    $response= $teli->restrictedUser->setChannelLimits(21456, 10, 100);
    var_dump($response);
}
//setChannelLimits();