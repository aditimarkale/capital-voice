<?php
require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;
$account_sid = 'ACc2ee9a0b7bd01ddfd3079fc23a433407'; 
$auth_token = '6a7fed7f68a9d89d75996bc165982d2b'; 
$client = new Client($account_sid, $auth_token); 

$number = $_POST['From'];
$body = $_POST['Body'];
//$url = 'https://raw.githubusercontent.com/samayo/country-json/master/src/country-by-capital-city.json';
//$file = file_get_contents($url);
//$data = json_decode($file, true);


header('Content-Type: text/xml');
?>