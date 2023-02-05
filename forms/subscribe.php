<?php

//---------------------------------------------
// WARNING: this doesn't include sanitization
// and validation
//---------------------------------------------
if (isset($_POST['name'], $_POST['email']) // check if the $_post var has the following keys, and there not null
        and
        filter_has_var(INPUT_POST, 'name') // it double check if the var come from an HTTP request

) {
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);

	// show the $name and $email
	echo "Thanks $name for your subscription.<br>";
	echo "Please confirm it in your inbox of the email $email.";
} else {
	echo 'You need to provide your name and email address.';
}