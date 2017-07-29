<?php
require 'vendor/autoload.php'; 
$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client ->compandydb;
$empcollection = $companydb ->empcollection;
/*
$insertOneResult = $empcollection->insertOne(
    ['_id' => '1', 'name' => 'Andrew', 'age' => '26', 'skill' => 'mongoDB']
);
printf("Inserted %d documents", $insertOneResult->getInsertedCount());
var_dump($insertOneResult->getInsertedId());
*/

$insertManyResult = $empcollection->insertMany([
    ['_id' => '2', 'name' => 'Brad', 'age' => '26', 'skill' => 'mongoDB'],
    ['_id' => '3', 'name' => 'Chris', 'age' => '30', 'skill' => 'nodejs'],
    ['_id' => '4', 'name' => 'Debbie', 'age' => '22', 'skill' => 'angular']
]);

$insertManyResult = $empcollection -> insertMany([
     ['_id'=> '400', 'name' =>'Tony','age'=>'25', 'skill'=> 'mongoDB' ],
     ['_id'=> '500', 'name' =>'HAHA','age'=>'25', 'skill'=> 'mongoDB' ],
     ['_id'=> '600', 'name' =>'HEIHEI','age'=>'25', 'skill'=> 'mongoDB' ]

]);

printf("Inserted %d documents", $insertManyResult -> getInsertedCount());
var_dump($insertManyResult -> getInsertedIds());
printf("Inserted %d documents", $insertManyResult -> getInsertedCount());
var_dump($insertManyResult -> getInsertedIds());

?>