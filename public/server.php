<?php

//Receive the RAW post data.
$content = trim(file_get_contents("php://input"));

$decoded = json_decode($content, true);

$email = $decoded["email"];
$password = $decoded["password"];

if($email == "hr@auphansoftware.com" && $password == "hello") {
   consoleLog("success");
} else {
   // Send error back to user.
   
}

function consoleLog($toPrint)
{
   print_r(json_encode($toPrint));
}