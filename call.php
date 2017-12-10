<?php
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
            // Step 4: Change the 'To' number below to whatever number you'd like 
            // to call.
            $number,

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