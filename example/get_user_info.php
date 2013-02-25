<?php
/*
 * Required parameters
 */
$appId = "";
$apiKey = "";
$email = "";
$password = "";

/*
 * Initilize a new instance of the class
 */
include("../mflib.php");

$mflib = new mflib($appId, $apiKey);
$mflib->email = $email;
$mflib->password = $password;

/*
 * Get a Access Session Token to authenticate to the API service
 *
 * This token is valid for 10 minutes only.
 */
$sessionToken = $mflib->userGetSessionToken();

/*
 * Print the user information. Other methods should be as simple as that
 */
var_dump($mflib->userGetInfo($sessionToken));
?>
