<?php
//Require DatabaseSelector to retrieving data
require_once dirname(__FILE__) . '/../classes/System/Databases/DatabaseSelector.php';

//Init the database
$db = new \System\Databases\DatabaseSelector(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Get the record from the db
$customer = $db->getCustomerById($_GET['id']);

//Override logic for POST
require_once dirname(__FILE__) . '/includes/post-data.php';

//Database magic when no errors are found
if (isset($formData) && empty($errors)) {


    //Save the record to the db
    if ($customer->update($db->getConnection())) {
        $success = 'Your customer has been updated in the database!';
    } else {
        $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
    }
}
