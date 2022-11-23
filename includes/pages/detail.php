<?php
//Require index to make sure we have our album data
require_once dirname(__FILE__) . '/index.php';

//Retrieve the GET parameter from the 'Super global'
$customerNumber = $_GET['customerNumber'];

//Get the records from the array
/** @var Customer[] $customers */
$customer = $customers[$customerNumber];
