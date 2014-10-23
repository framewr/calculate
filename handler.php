<?php
require_once 'rand.php';
require_once 'db.php';
require_once 'action.php';

$rand = new Rand();
$database = new Database();
$action = new Action();

$database->select('tk');
$res = $database->getResult();

$all_result = array();

for($x = 0; $x < count($res); $x++)
	{
		$x = $res['name'];
		$all_result[$x] = array($rand->randTime(), $rand->randPrice());
	}

print_r($all_result);

?>	  
