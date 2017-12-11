<?php
  require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
    use Twilio\Rest\Client;
    $account_sid = 'ACc2ee9a0b7bd01ddfd3079fc23a433407'; 
    $auth_token = '6a7fed7f68a9d89d75996bc165982d2b'; 
    $client = new Client($account_sid, $auth_token); 

$number = $_POST['From'];
$body = $_POST['Body'];
$url = 'https://raw.githubusercontent.com/samayo/country-json/master/src/country-by-capital-city.json';
$file = file_get_contents($url);
$data = json_decode($file, true);

foreach ($data as $character) {  
        if($character['country'] == $body) {
          $city = $character['city'];
            break;
        }
}
            try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            $number,
            "+12674407881",
            // Step 6: Set the URL Twilio will request when the call is answered.
            array("url" => "http://demo.twilio.com/welcome/voice/")           
        );
        //echo "Started call: " . $call->sid;
        echo "<Response>
                <Say>
                    Capital of " . $body . " is " . $city . "
                </Say>
                </Response>" . $call->sid;
                
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

header('Content-Type: text/xml');
?>