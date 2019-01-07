<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
// header('Access-Control-Allow-Methods: GET, POST, PUT, OPTIONS');

$email = $_POST["email"];
$pasword = $_POST["password"];
echo $email . " " . $password;
echo "hi";