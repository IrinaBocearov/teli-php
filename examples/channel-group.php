<?php

require ("./client.php");

function listChannelGroup(){
    global $teli;

    $response= $teli->channelGroup->listChannelGroup();
    var_dump($response);
}
//listChannelGroup();

function get(){
    global $teli;

    $response= $teli->channelGroup->get(466);
    var_dump($response);
}
//get();

function create(){
    global $teli;

    $response = $teli->channelGroup->create([
        'name' => ' Channel group testing php1',
        'channels' => '4'
    ]);
    var_dump($response);
}
//create();
function update(){
    global $teli;

    $response= $teli->channelGroup->update(466,[
        'name'=>'Testing update channel group php2',
        'channels'=>'5'
    ]);
    var_dump($response);
}

//update();

function remove(){
    global $teli;

    $response= $teli->channelGroup->remove(466);
    var_dump($response);
}
remove();