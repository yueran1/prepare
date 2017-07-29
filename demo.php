 <?php 
 require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb= $client -> companydb;

/*$result2 = $companydb -> dropCollection('mycollection');

var_dump($result2);*/

/*Every iteration will assign collection to variable*/
/*foreach($companydb->listCollections() as $collection)
{
	var_dump($collection);
	
}*/


$result1 = $companydb -> createCollection('mycollection2');
var_dump($result1);

?> 