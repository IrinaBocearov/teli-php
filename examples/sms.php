<?php

require("./client.php");

function sendSMS() {
    global $teli;

    $response = $teli->sms->send([
        'source' => 2674935581,
        'destination' => 7205551212,
        'message' => 'Hery'
    ]);
    var_dump($response);
}
//sendSMS();

function getSMSRecords(){
    global $teli;

    $response= $teli->sms->getRecords();
    var_dump($response);
}

//getSMSRecords();
function setXMPPPassword() {
	global $teli;

	$response = $teli->sms->setXMPPPassword([
		'did_id' => 2674935581,
		'password' => 'password'
	]);
	var_dump($response);
}
setXMPPPassword();