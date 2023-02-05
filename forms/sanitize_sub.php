<?php

//---------------------------------------------
// WARNING: this doesn't include sanitization
// and validation
//---------------------------------------------
if (filter_has_var(INPUT_POST, 'email') // check if the $_post var has the following keys, and there not null
    and
    filter_has_var(INPUT_POST, 'name') // it double check if the var come from an HTTP request

) {
    // Escape the user inputs
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
    // Sanitize the input
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!$name or !$email) {
        die("Problem with input sanitization");
    }
    else {
        // validate the input
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if(!$email){
          die("Problem with input validation");  
        }
        else {
        // show the $name and $email
	    echo "Thanks $name for your subscription.<br>";
	    echo "Please confirm it in your inbox of the email $email.";

        }
    }
	
} else {
	echo 'You need to provide your name and email address.';
}