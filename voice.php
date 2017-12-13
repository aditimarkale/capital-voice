<?php
require_once 'twilio-php-master/Twilio/autoload.php';
require 'twilio-php-master/Services/Twilio.php';
use Twilio\Twiml;

$response = new Services_Twilio_Twiml();
$response->say('Hello');
print $response;
?>