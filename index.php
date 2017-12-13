<?php
    require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
    require 'twilio-php-master/Services/Twilio.php';
    use Twilio\Rest\Client;
    $account_sid = 'ACc2ee9a0b7bd01ddfd3079fc23a433407'; 
    $auth_token = '6a7fed7f68a9d89d75996bc165982d2b'; 
    $client = new Client($account_sid, $auth_token); 

$number = $_POST['From'];
$body = $_POST['Body'];
$url = 'https://raw.githubusercontent.com/samayo/country-json/master/src/country-by-capital-city.json';
$file = file_get_contents($url);
$data = json_decode($file, true);
global $city;

foreach ($data as $character) {  
        if($character['country'] == $body) {
          $city = $character['city'];
            echo $city;
            break;
        }
}
            try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            $number,
            "+12674407881",
            // Step 6: Set the URL Twilio will request when the call is answered.
           //array("url" => "http://demo.twilio.com/welcome/voice/")
           array("url" => "https://troubled-gun-1513.twil.io/assets/index.php")   
        );
                
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

header('Content-Type: text/xml');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<?xml version="1.0" encoding= "UTF-8" ?>
<Response>
    <Say>
        <?php echo $city; ?>
    </Say>
</Response>