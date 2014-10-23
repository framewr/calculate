<?php
require_once 'db.php';
require_once 'action.php';

$database = new Database();
$action = new Action();

$database->connect();
$database->insert('tk',array($action->getName()), 'name');
$database->disconnect(); 
     
?>	  
