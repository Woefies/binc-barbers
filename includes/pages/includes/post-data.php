<?php
//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Require form classes
    require_once dirname(__FILE__) . '/../../classes/System/Form/Data.php';
    require_once dirname(__FILE__) . '/../../classes/System/Form/Validation/Validator.php';
    require_once dirname(__FILE__) . '/../../classes/System/Form/Validation/CustomerValidator.php';

    //Set form data
    $formData = new \System\Form\Data($_POST);

    //Override object with new variables
    $customer->name = $formData->getPostVar('name');
    $customer->lastname = $formData->getPostVar('lastname');
    $customer->email = $formData->getPostVar('email');
    $customer->password = $formData->getPostVar('password');

    //Actual validation
    $validator = new \System\Form\Validation\CustomerValidator($customer);
    $validator->validate();
    $errors = $validator->getErrors();
}
