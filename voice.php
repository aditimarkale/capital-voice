<?php
require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
require_once '/index.php';
use Twilio\Twiml;

$response = new Twiml();
$response->say($city, ['voice' => 'woman']);
echo $response;
?>