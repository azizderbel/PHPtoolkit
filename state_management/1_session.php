<?php
// session is used to persist information across pages
// kind of the web server storage

//Sessions allow you to store data on the web server 
//associated with a session id. Once you create a 
//session, PHP sends a cookie that contains the 
//session id to the web browser. In the subsequent 
//requests, the web browser sends the session id 
//cookie back to the web server so that PHP can 
//retrieve the data based on the session id


session_start(); // create new session
// PHP generates a unique session id and passes it to 
// the web browser in the form of a cookie named 
// PHPSESSID

echo ini_get('session.save_path'); // display wehre php stores a session data on the webserver
// or session_save_path();
$_SESSION['user'] = 'admin';

session_destroy(); // delete the data related to the current session
// but it does not unet he cookie and $_SESSION var