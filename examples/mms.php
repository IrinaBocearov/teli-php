<?php

require ("./client.php");

function sendMMSURL(){
    global $teli;

    $response= $teli->mms->sendUrl([
		'destination'=> 7204098262,
		'source'=> 3033531112,
		'file_url'=> 'https://www.softpaws.com/template/images/landing_page/july_cat_image.jpg',
	]);
    var_dump($response);
}
//sendMMSURL();

function sendMMSEmbedded(){
    global $teli;
	$contents = file_get_contents("./images/people.jpg");
    $response= $teli->mms->sendEmbedded([
        'destination'=> 7205551212,
        'source'=> 2674935581,
        'file_name'=> 'test file mms php',
		'file_data' => base64_encode($contents)
    ]);
    var_dump($response);
}
//sendMMSEmbedded();