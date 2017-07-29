<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
//OMG miss spelling!!!
$companydb = $client ->companydb;
$empcollection = $companydb ->empcollection;


$insertManyResult = $empcollection -> insertMany([
     ['_id'=> '100', 'name' =>'Tony','age'=>'25', 'skill'=> 'mongoDB' ],
     ['_id'=> '299', 'name' =>'HAHA','age'=>'25', 'skill'=> 'mongoDB' ],
     ['_id'=> '399', 'name' =>'HEIHEI','age'=>'25', 'skill'=> 'mongoDB' ]

]);
/*insert single document*/
/*$insertOneResult = $empcollection -> insertOne(

    ['_id'=> '1', 'name' =>'Tony','age'=>'25', 'skill'=> 'mongoDB' ]
);
*/
printf("Inserted %d documents", $insertManyResult -> getInsertedCount());
var_dump($insertManyResult -> getInsertedIds());

?>