<?php
//Require DatabaseSelector to retrieving data
require_once dirname(__FILE__) . '/../classes/Databases/DatabaseSelector.php';

//Init the database
$db = new \classes\Databases\DatabaseSelector(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Create new instance of MusicCollection & set albums
$customerCollection = new \System\MusicCollection\Collection();
$albumCollection->set($db->getAlbums());

//Get formatted albums objects & total
$albums = $albumCollection->get();
$totalAlbums = $albumCollection->getTotal();
