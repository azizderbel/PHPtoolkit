<?php

// print_r(getallheaders()); // get the http request header
// print($_POST) // get the http request data form
// print_r($_GET); // get query params


http_response_code(201); // set the http response code
echo json_encode(array(0 => 'Response body')); // 
