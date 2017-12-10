<?php
require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;
$account_sid = 'ACc2ee9a0b7bd01ddfd3079fc23a433407'; 
$auth_token = '6a7fed7f68a9d89d75996bc165982d2b'; 
$client = new Client($account_sid, $auth_token); 

$number = $_POST['From'];
try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            // Step 4: Change the 'To' number below to whatever number you'd like 
            // to call.
            "+12678108571",

            // Step 5: Change the 'From' number below to be a valid Twilio number 
            // that you've purchased or verified with Twilio.
            "+12644407881",

            // Step 6: Set the URL Twilio will request when the call is answered.
            array("url" => "http://demo.twilio.com/welcome/voice/")
            
            
        );
        echo "Started call: " . $call->sid;
        
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }


header('Content-Type: text/xml');
?>