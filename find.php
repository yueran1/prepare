<?php

/*require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client -> companydb;
$empcollection = $companydb -> empcollection;

$document = $empcollection -> findOne(
    ['age' => '25']
);

var_dump($document);*/

require 'vendor/autoload.php'; 
$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

/*
$document = $empcollection->findOne(
    ['_id' => '1']
);
var_dump($document);*/

$documentlist = $empcollection -> find(
   
);

foreach($documentlist as $doc){
    var_dump($doc);
}


?>