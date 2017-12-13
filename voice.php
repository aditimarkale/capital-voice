<?php
require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
//require_once '/index.php';
use Twilio\Twiml;

$twiml = new Services_Twilio_Twiml();
$twiml->say( 'Hello Mark');
//echo $response;
?>