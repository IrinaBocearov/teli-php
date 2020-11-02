<?php

require ("./client.php");

function createRecord(){
    global $teli;

    $response= $teli->emergency->createRecord([
        'did_number'=> 525634721,
        'full_name'=> 'Test php',
        'address'=> 'abu dabhi street',
        'city'=> 'dubai',
        'state'=> 'NY',
        'zip'=> '14420'
    ]);
    var_dump($response);
}
//createRecord();

function lookupRecord(){
    global $teli;

    $response= $teli->emergency->lookupRecord(false,5876023953);
    var_dump($response);
}
//lookupRecord();

function listRecord(){
    global $teli;

    $response= $teli->emergency->listRecord(true);
    var_dump($response);
}

//listRecord();

function updateRecord(){
    global $teli;

    $response= $teli->emergency->updateRecord(108754599572, ['full_name' => 'test']);
    var_dump($response);
}

//updateRecord();

function removeRecord(){
    global $teli;

    $response= $teli->emergency->removeRecord(108754599572);
    var_dump($response);
}

//removeRecord();

function validateRecord(){
    global $teli;

    $response= $teli->emergency->validateRecord(['address' => 'test']);
    var_dump($response);
}

//validateRecord();

function createAlertGroup(){
    global $teli;

    $response= $teli->emergency->createAlertGroup("testing alert group php1");
    var_dump($response);
}

//createAlertGroup();

function listAlertGroup(){
    global $teli;

    $response= $teli->emergency->listAlertGroup();
    var_dump($response);
}

//listAlertGroup();

function lookupAlertGroup(){
    global $teli;

    $response= $teli->emergency->lookupAlertGroup(['group_id' => 941]);
    var_dump($response);
}
//lookupAlertGroup();

function removeAlertGroup(){
    global $teli;

    $response= $teli->emergency->removeAlertGroup(941);
    var_dump($response);
}
//removeAlertGroup();

function assignNumberToAlertGroup(){
    global $teli;

    $response= $teli->emergency->assignNumberToAlertGroup(123, ['group_id' => 941]);
    var_dump($response);
}
//assignNumberToAlertGroup();

function unAssignNumberToAlertGroup(){
    global $teli;

    $response= $teli->emergency->unAssignNumberToAlertGroup(['group_id' => 88]);
    var_dump($response);
}
//unAssignNumberToAlertGroup();

function addNotificationToAlertGroup(){
    global $teli;

    $response= $teli->emergency->addNotificationToAlertGroup(12, []);
    var_dump($response);
}

function removeNotifyFromAlertGroup(){
    global $teli;

    $response= $teli->emergency->removeNotifyFromAlertGroup(12);
    var_dump($response);
}