<?php
// cookies solve the statless caracteristic oh HTTP
// A cookie is a piece of data that a web server sends to the web browser
// Attached to the HTTP response header
// then the browser stores the cookie(max 4KB). and send subsequent call with the same cokkie attached to the HTTP request

// in the web server we can access the cookie with
//$_COOKIE

// why cookies ?
 //- session management : remember login users
 //- Personalization : settings
 //- Tracking : user behaviour

define('ONE_WEEK', 7 * 86400);

$returning_visitor = false;

if (!isset($_COOKIE['return'])) {
	setcookie('return', '1', time() + ONE_WEEK);
} else {
	$returning_visitor = true;
}

echo $returning_visitor ? 'Welcome back!' : 'Welcome to my website!';