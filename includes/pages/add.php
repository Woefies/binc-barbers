<?php
//Set default empty album & load POST logic
$customer = new \System\customerCollection\Customer();
require_once dirname(__FILE__) . '/includes/post-data.php';



//Database magic when no errors are found
if (isset($formData) && empty($errors)) {
    require_once dirname(__FILE__) . '/../classes/System/Databases/DatabaseInserter.php';



    //Init the database
    $db = new \System\Databases\DatabaseInserter(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Save the record to the db
    if ($db->addCustomer($customer)) {
        $success = 'Your new customer has been added to the database!';

        //Override to see a new empty form
        $customer = new \System\customerCollection\Customer('', '', '', '');
    } else {
        $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
    }
}
