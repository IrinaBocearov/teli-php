<?php

require ("./client.php");

function getBillingDetailSummary(){
    global $teli;

    $response= $teli->user->getBillingDetailSummary([
    	'start_date' => '10-02-2020',
		'end_date' => '10-10-2020',
		'user_id' => 123
	]);
    var_dump($response);
}
//getBillingDetailSummary();

function updateAccountInfo(){
    global $teli;

    $response= $teli->user->updateAccountInfo(['address' => 'Moldova']);
    var_dump($response);
}
//updateAccountInfo();

function updatePassword(){
    global $teli;

    $response= $teli->user->updatePassword();
    var_dump($response);
}

function updateBranding(){
    global $teli;

    $response= $teli->user->updateBranding();
    var_dump($response);
}

function createSubUser(){
    global $teli;

    $response= $teli->user->createSubUser();
    var_dump($response);
}

function listSubUser(){
    global $teli;

    $response= $teli->user->listSubUser();
    var_dump($response);
}

function updateSubUser(){
    global $teli;

    $response= $teli->user->updateSubUser();
    var_dump($response);
}

function removeSubUser(){
    global $teli;

    $response= $teli->user->removeSubUser(123);
    var_dump($response);
}
//removeSubUser();

function updateFraudSettings(){
    global $teli;

    $response= $teli->user->updateFraudSettings();
    var_dump($response);
}

function removeCSS(){
    global $teli;

    $response= $teli->user->removeCSS();
    var_dump($response);
}

function removeLogo(){
    global $teli;

    $response= $teli->user->removeLogo();
    var_dump($response);
}

function setSMSUrl(){
    global $teli;

    $response= $teli->user->setSMSURL('test');
    var_dump($response);
}
setSMSUrl();

function setWebHookUrl(){
    global $teli;

    $response= $teli->user->setWebHookUrl();
    var_dump($response);
}

function setSMSDeliveryUrl(){
    global $teli;

    $response= $teli->user->setSMSDeliveryUrl();
    var_dump($response);
}

function setAffiliatePaypal(){
    global $teli;

    $response= $teli->user->setAffiliatePaypal();
    var_dump($response);
}

function resetSubUserPassword(){
    global $teli;

    $response= $teli->user->resetSubUserPassword();
    var_dump($response);
}

function listSubUserSecurityGroups(){
    global $teli;

    $response= $teli->user->listSubUserSecurityGroups();
    var_dump($response);
}

function outboundChannelCount(){
    global $teli;

    $response= $teli->user->outboundChannelCount();
    var_dump($response);
}

function getInvoice(){
    global $teli;

    $response= $teli->user->getInvoice();
    var_dump($response);
}

function getInvoiceByEmail(){
    global $teli;

    $response= $teli->user->getInvoiceByEmail();
    var_dump($response);
}

function getBalance(){
    global $teli;

    $response= $teli->user->getBalance();
    var_dump($response);
}

function getDetailedBalance(){
    global $teli;

    $response= $teli->user->getDetailedBalance();
    var_dump($response);
}

function listTransactions(){
    global $teli;

    $response= $teli->user->listTransactions();
    var_dump($response);
}

function getTransactionItems(){
    global $teli;

    $response= $teli->user->getTransactionItems();
    var_dump($response);
}

