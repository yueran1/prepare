 <?php 
 require 'vendor/autoload.php';

$client = new MongoDB\Client;

/*
$result3 = $client -> dropDatabase('newdb');
var_dump($result3);*/

/*foreach($client -> listDatabases() as $db)
{
	var_dump($db);
	
}*/


$companydb= $client -> newdb;

$result2 = $companydb -> createCollection('newcollection');

var_dump($result2);

/*$result2 = $companydb -> dropCollection('mycollection');

var_dump($result2);*/

/*Every iteration will assign collection to variable*/
/*foreach($companydb -> listCollections() as $collection)
{
	var_dump($collection);
	
}*/


/*$result1 = $companydb -> createCollection('mycollection2');
var_dump($result1);*/

?> 