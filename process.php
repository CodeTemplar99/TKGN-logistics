<?php

session_start();
// initializing variables
// $username = "";
// $email    = "";
// $errors = array(); 

// declaration of variables
$phone_error = $address_error = $type_of_parcel_error = "";
$delivery_address_error = $recipient_name_error = $recipient_phone_error= "";

// check on submit
if(isset($_POST['requestDispatch']))
{


    
if (empty($_POST['phone'])) {
    $phone_error = 'phone is required';
    return false;
}


if(empty($_POST['address'])){
    $address_error = 'address is required';
    return false;

}

if (empty($_POST['type_of_parcel'])) {
    $type_of_parcel_error = 'enter the type of parcel';
    return false;
}

if (empty($_POST['delivery_address'])) {
    $delivery_address_error= 'enter delivery address';
    return false;
}

if (empty($_POST['recipient_name'])) {
    $recipient_name_error= 'enter recipient name';
    return false;
}

if (empty($_POST['recipient_phone'])) {
    $recipient_phone_error = 'enter recipient phone';
    return false;
}

  // Finally, register send if there are no errors in the form
if (count($errors) == 0) {
  
  // clear inputs
  // unset($_POST)
}

}