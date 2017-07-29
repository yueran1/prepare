<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$companydb= $client ->companydb;
$empcollection=$companydb->empcollection;

$replaceResult= $empcollection->replaceOne(
    ['_id'=>'1'],
    ['_id'=>'1','favColor'=>'blue']
);

printf("Mathed %d documents \n", $replaceResult-> getMatchedCount());
printf("Modified %d documents \n", $replaceResult-> getModifiedCount());
/*$updateResult = $empcollection->updateMany(
    ['skill'=>'mongoDB'],
    ['$set'=>['manager'=>'Tim']]
);
printf("Mathed %d documents \n", $updateResult-> getMatchedCount());
printf("Modified %d documents \n", $updateResult-> getModifiedCount());
*/
/*
$updateResult = $empcollection->updateOne(
    ['age'=>'25'],
    ['$set'=>['age'=>'18']]
);
printf("Mathed %d documents \n", $updateResult-> getMatchedCount());
printf("Modified %d documents \n", $updateResult-> getModifiedCount());
*/



?>